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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Combination whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Combination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Combination whereExample($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Combination whereExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Combination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Combination whereUpdatedAt($value)
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
		return $this->belongsToMany(\App\Models\Character::class)
					->withPivot('id', 'custom_order')
					->withTimestamps();
	}
}
