<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 21 Oct 2017 10:26:35 +0000.
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
 * @property int $dongdu_order
 * 
 * @property \Illuminate\Database\Eloquent\Collection $bookmarks
 * @property \Illuminate\Database\Eloquent\Model $bushu
 * @property \Illuminate\Database\Eloquent\Collection $combinations
 * @property \Illuminate\Database\Eloquent\Collection $explanations
 * @property \Illuminate\Database\Eloquent\Collection $parsers
 * @property \Illuminate\Database\Eloquent\Collection $pronunciations
 * @property \Illuminate\Database\Eloquent\Collection $relations
 *
 * @package App\Models
 */
class Character extends Eloquent
{
	protected $fillable = [
		'character',
		'han_tu',
		'stroke_count',
		'stroke_order_link',
		'dongdu_order'
	];

	public function bookmarks()
	{
		return $this->hasMany(Bookmark::class);
	}

	public function bushu()
	{
		return $this->hasOne(Bushu::class);
	}

	public function combinations()
	{
		return $this->belongsToMany(Combination::class)
					->withPivot('id', 'custom_order')
					->withTimestamps();
	}

	public function explanations()
	{
		return $this->hasMany(Explanation::class);
	}

	public function parsers()
	{
		return $this->hasMany(Parser::class);
	}

	public function pronunciations()
	{
		return $this->hasMany(Pronunciation::class);
	}

	public function relations()
	{
		return $this->hasMany(Relation::class, 'target_id');
	}
}
