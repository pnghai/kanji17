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
 * @property Character $character
 * @property Combination $combination
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|CharacterCombination whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharacterCombination whereCombinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharacterCombination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharacterCombination whereCustomOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharacterCombination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharacterCombination whereUpdatedAt($value)
 * @mixin \Eloquent
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
		return $this->belongsTo(Character::class);
	}

	public function combination()
	{
		return $this->belongsTo(Combination::class);
	}
}
