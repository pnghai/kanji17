<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 21 Oct 2017 10:26:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bushu
 * 
 * @property int $id
 * @property int $character_id
 * @property int $custom_order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property Character $character
 *
 * @package App\Models
 */
class Bushu extends Eloquent
{
	protected $table = 'bushus';

	protected $fillable = [
		'character_id',
		'custom_order'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}
}
