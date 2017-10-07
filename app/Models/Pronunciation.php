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
 * 
 * @property \App\Models\Character $character
 *
 * @package App\Models
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
		return $this->belongsTo(\App\Models\Character::class);
	}
}
