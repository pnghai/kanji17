<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 07 Oct 2017 04:17:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Explanation
 *
 * @property int $id
 * @property string $explanation
 * @property string $i18n_iso_code
 * @property int $character_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property Character $character
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Explanation whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Explanation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Explanation whereExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Explanation whereI18nIsoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Explanation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Explanation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Explanation extends Eloquent
{
	protected $casts = [
		'character_id' => 'int'
	];

	protected $fillable = [
		'explanation',
		'i18n_iso_code',
		'character_id'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}
}
