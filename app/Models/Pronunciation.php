<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pronunciation
 *
 * @property int $id
 * @property bool $is_kunyomi
 * @property int $character_id
 * @property string $pronunciation
 * @property string $pronunciation_audio_link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property Character $character
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation whereIsKunyomi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation wherePronunciation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation wherePronunciationAudioLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronunciation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pronunciation extends Eloquent
{
	protected $casts = [
		'is_kunyomi' => 'bool',
		'character_id' => 'int'
	];

	protected $fillable = [
		'is_kunyomi',
		'character_id',
		'pronunciation',
		'pronunciation_audio_link'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}
}
