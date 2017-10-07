<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bookmark
 *
 * @property int $id
 * @property int $user_id
 * @property int $character_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \App\Models\Character $character
 * @property \App\Models\User $user
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bookmark whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bookmark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bookmark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bookmark whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bookmark whereUserId($value)
 * @mixin \Eloquent
 */
class Bookmark extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'character_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'character_id'
	];

	public function character()
	{
		return $this->belongsTo(\App\Models\Character::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
