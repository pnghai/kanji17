<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Combination
 *
 * @property int $id
 * @property string $content
 * @property string $explanation
 * @property string $example
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Illuminate\Database\Eloquent\Collection $characters
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Combination whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Combination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Combination whereExample($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Combination whereExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Combination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Combination whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Combination extends Eloquent
{
	protected $fillable = [
		'content',
		'explanation',
		'example'
	];

	public function characters()
	{
		return $this->belongsToMany(Character::class)
					->withPivot('id', 'custom_order')
					->withTimestamps();
	}
}
