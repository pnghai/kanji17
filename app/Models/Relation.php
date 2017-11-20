<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Relation
 *
 * @property int $id
 * @property int $source_id
 * @property int $target_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property Character $character
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Relation extends Eloquent
{
	protected $casts = [
		'source_id' => 'int',
		'target_id' => 'int'
	];

	protected $fillable = [
		'source_id',
		'target_id'
	];

	public function character()
	{
		return $this->belongsTo(Character::class, 'target_id');
	}
}
