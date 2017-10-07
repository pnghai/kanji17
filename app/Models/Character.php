<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Character
 *
 * @property int $id
 * @property string $character
 * @property string $han_tu
 * @property int $stroke_count
 * @property bool $is_bushu
 * @property string $stroke_order_link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Illuminate\Database\Eloquent\Collection $bookmarks
 * @property \Illuminate\Database\Eloquent\Collection $combinations
 * @property \Illuminate\Database\Eloquent\Collection $explanations
 * @property \Illuminate\Database\Eloquent\Collection $pronunciations
 * @property \Illuminate\Database\Eloquent\Collection $relations
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereCharacter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereHanTu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereIsBushu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereStrokeCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereStrokeOrderLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Character whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Character extends Eloquent
{
	protected $casts = [
		'stroke_count' => 'int',
		'is_bushu' => 'bool'
	];

	protected $fillable = [
		'character',
		'han_tu',
		'stroke_count',
		'is_bushu',
		'stroke_order_link',
		'dongdu_order'
	];

	public function bookmarks()
	{
		return $this->hasMany(\App\Models\Bookmark::class);
	}

	public function combinations()
	{
		return $this->belongsToMany(\App\Models\Combination::class)
					->withPivot('id', 'custom_order')
					->withTimestamps();
	}

	public function explanations()
	{
		return $this->hasMany(\App\Models\Explanation::class);
	}

	public function pronunciations()
	{
		return $this->hasMany(\App\Models\Pronunciation::class);
	}

	public function relations()
	{
		return $this->hasMany(\App\Models\Relation::class, 'target_id');
	}
}
