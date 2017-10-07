<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterCombination
 * 
 * @property int $id
 * @property int $character_id
 * @property int $combination_id
 * @property int $custom_order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Character $character
 * @property \App\Models\Combination $combination
 *
 * @package App\Models
 */
class CharacterCombination extends Eloquent
{
	protected $table = 'character_combination';

	protected $casts = [
		'character_id' => 'int',
		'combination_id' => 'int',
		'custom_order' => 'int'
	];

	protected $fillable = [
		'character_id',
		'combination_id',
		'custom_order'
	];

	public function character()
	{
		return $this->belongsTo(\App\Models\Character::class);
	}

	public function combination()
	{
		return $this->belongsTo(\App\Models\Combination::class);
	}
}
