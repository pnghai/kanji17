<?php

use Illuminate\Database\Seeder;

class BushusSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		return;
		//only run the first time
		$client = new \GuzzleHttp\Client();
		$result = $client->get( "http://ccdb.hemiola.com/characters/radicals", [
			'query' => [
				'fields' => "string,kVietnamese,kTotalStrokes,kDefinition,kJapaneseKun,kJapaneseOn",
			]
		] );
		if ( $result->getStatusCode() == 200 ) {
			\DB::table( 'bushus' )->delete();
			\DB::table( 'explanations' )->delete();
			\DB::table( 'pronunciations' )->delete();
			\DB::table( 'characters' )->delete();
			$rawBushus = json_decode( $result->getBody(), true );
			$this->command->getOutput()->progressStart( count( $rawBushus ) );
			foreach ( $rawBushus as $rawBushu ) {
				$kanji = \App\Models\Character::join( 'bushus', 'bushus.character_id', 'characters.id' )->where( 'custom_order', $rawBushu['radical'] )->first();
				if ( ! empty( $kanji ) && empty( $rawBushu['kVietnamese'] ) ) {
					$rawBushu['kVietnamese'] = $kanji->han_tu;
				}
				$character = new \App\Models\Character( [
					'character'    => $rawBushu['string'],
					'han_tu'       => $rawBushu['kVietnamese'],
					'stroke_count' => $rawBushu['kTotalStrokes'],
				] );
				$character->save();
				$character->bushu()->save( new \App\Models\Bushu( [
					'custom_order' => $rawBushu['radical'],
				] ) );
				if ( ! empty( $rawBushu['kDefinition'] ) ) {
					$character->explanations()->save( new \App\Models\Explanation( [
						'explanation'   => $rawBushu['kDefinition'],
						'i18n_iso_code' => 'en-US',
					] ) );
				}
				//todo: import on,kun
				$transliterator = new \JpnForPhp\Transliterator\Transliterator();
				$transliterator->setSystem( new \JpnForPhp\Transliterator\System\Katakana() );
				$character->pronunciations()->saveMany(
					array_merge(
						array_map(
							function ( $value ) use ( $transliterator ) {
								return new \App\Models\Pronunciation( [
									'pronunciation' =>
										$transliterator->transliterate( $value ),
									'is_kunyomi'    => true,
								] );
							},
							explode( " ", $rawBushu['kJapaneseKun'] )
						),
						array_map(
							function ( $value ) use ( $transliterator ) {
								return new \App\Models\Pronunciation( [ 'pronunciation' => $transliterator->transliterate( $value ), ] );
							},
							explode( " ", $rawBushu['kJapaneseOn'] )
						)
					)
				);
				$this->command->getOutput()->progressAdvance();
			}
			$this->command->getOutput()->progressFinish();
		}
	}
}
