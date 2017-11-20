<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 09 Oct 2017 08:45:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Parser
 * 
 * @property int $id
 * @property string $content
 * @property string $i18n_iso_code
 * @property int $character_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property Character $character
 *
 * @package App\Models
 */
class Parser extends Eloquent
{
	protected $casts = [
		'character_id' => 'int'
	];

	protected $fillable = [
		'content',
		'i18n_iso_code',
		'character_id'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}
}
