<?php

if ( ! function_exists( 'romaji_trans' ) ) {
	define( 'HIRATABLE', 'a A i I u U e E o O KAGAKIGIKUGUKEGEKOGOSAZASIZISUZUSEZESOZO' .
	                     'TADATIDItuTUDUTEDETODONANINUNENOHABAPAHIBIPIHUBUPUHEBEPEHOBOPO' .
	                     'MAMIMUMEMOyaYAyuYUyoYORARIRUREROwaWAWIWEWOn ' );
// eucjp: 2521; unicode: 30A1
	define( 'KATATABLE', 'a A i I u U e E o O KAGAKIGIKUGUKEGEKOGOSAZASIZISUZUSEZESOZO' .
	                     'TADATIDItuTUDUTEDETODONANINUNENOHABAPAHIBIPIHUBUPUHEBEPEHOBOPO' .
	                     'MAMIMUMEMOyaYAyuYUyoYORARIRUREROwaWAWIWEWOn VUkake' );

	/**
	 * @param $s
	 *
	 * @return float|int
	 */
	function HiraTrans( $s ) {
		#print "trans('$s')\n";
		$pos = strpos( HIRATABLE, $s );
		if ( $pos === false ) {
			return 0xA1BC;
		} // ^

		return 0xA4A1 + $pos / 2;
	}

	/**
	 * @param $s
	 *
	 * @return float|int
	 */
	function KataTrans( $s ) {
		$pos = strpos( KATATABLE, $s );
		if ( $pos === false ) {
			return 0xA1BC;
		} // ^

		return 0xA5A1 + $pos / 2;
	}

	/**
	 * @param string $s
	 * @param string $formatter
	 *
	 * @return mixed|string
	 */
	function romaji_trans( $s, $formatter = 'katakana' ) {
		$s = strtoupper( str_replace(
			Array(
				'shi',
				'sh',
				'fu',
				'chi',
				'ch',
				'tsu',
				'dzi',
				'ji',
				'j',
				'l',
				'-',
				'â',
				'î',
				'û',
				'ê',
				'ô',
				'ā',
				'ī',
				'ū',
				'ē',
				'ō'
			),
			Array(
				'si',
				'sy',
				'hu',
				'ti',
				'ty',
				'tu',
				'zi',
				'zi',
				'dz',
				'r',
				'^',
				'a^',
				'i^',
				'u^',
				'e^',
				'o^',
				'a^',
				'i^',
				'u^',
				'e^',
				'o^'
			),
			$s ) );
		// DZA -> ZIya
		$s = preg_replace_callback( '/DZ([AUO])/', function ( $matches ) {
			return "ZI" . strtolower( "y$matches[1]" );
		}, $s );
		// DZE -> ZIe
		$s = preg_replace_callback( '/DZ([E])/', function ( $matches ) {
			return "ZI" . strtolower( "$matches[1]" );
		}, $s );
		// FO -> FUxo
		$s = preg_replace_callback( '@F([AIOE])@',
			function ( $matches ) {
				return "HU" . strtolower( $matches[1] );
			}, $s );
		// VO -> VUxo
		$s = preg_replace_callback( '@V([AIUEO])@',
			function ( $matches ) {
				return "VU" . strtolower( $matches[1] );
			}, $s );
		// KYA -> KYya
		$s = preg_replace_callback( '@([KSTNHMRGZBPD])Y([AUO])@',
			function ( $matches ) {
				return "$matches[1]Iy" . strtolower( $matches[2] );
			}, $s );
		// XTU -> tu (make them actually small)
		$s = preg_replace_callback( '@X(TU|Y[AUO]|[AIUEO]|KA|KE)@', function ( $matches ) {
			return strtolower( $matches[1] );
		}, $s );
		// KKO -> tuKO
		$s = preg_replace_callback( '@([KSTHMRYWGZBPDV]{2,})@',
			function ( $matches ) {
				return str_pad( "", 2 * strlen( $matches[1] ) - 2, "tu" ) . substr( $matches[1], 0, 1 );
			}, $s );
		// N -> n (but not NO -> nO)
		// At this point, N' will work correctly
		$s = preg_replace( '@N(?![AIUEO])@', 'n', $s );
		// Unrecognized characters off
		$s = preg_replace( '[^^VAIUEOKSTNHMYRWGZBPD]i', '', $s );

		$pat = '@([AIUEOnaiueo^]|..)@';
		$rec = 'EUCJP..UTF8';

		switch ( $formatter ) {
			case 'katakana':
				$result = recode_string( $rec, preg_replace_callback( $pat, function ( $matches ) {
					return pack( "n", KataTrans( $matches[1] ) );
				}, $s ) );
				break;
			case 'hiragana':
				$result = recode_string( $rec, preg_replace_callback( $pat, function ( $matches ) {
					return pack( "n", HiraTrans( $matches[1] ) );
				}, $s ) );
				break;
			default:
				$result = '';
		}

		return $result;
	}
}
