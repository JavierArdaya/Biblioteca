<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EDITORIAL
 * 
 * @property int $IdEditorial
 * @property string|null $Descripcion
 * @property bool|null $Estado
 * @property Carbon|null $AnioPublicacion
 * 
 * @property Collection|LIBRO[] $l_i_b_r_o_s
 *
 * @package App\Models
 */
class EDITORIAL extends Model
{
	protected $table = 'EDITORIAL';
	protected $primaryKey = 'IdEditorial';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'bool'
	];

	protected $dates = [
		'AnioPublicacion'
	];

	protected $fillable = [
		'Descripcion',
		'Estado',
		'AnioPublicacion'
	];

	public function l_i_b_r_o_s()
	{
		return $this->hasMany(LIBRO::class, 'IdEditorial');
	}
}
