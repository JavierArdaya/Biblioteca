<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ROL
 * 
 * @property int $idRol
 * @property string|null $TipoRol
 * @property bool|null $Estado
 * @property Carbon|null $FechaCreacion
 * 
 * @property Collection|PERSONA[] $p_e_r_s_o_n_a_s
 *
 * @package App\Models
 */
class ROL extends Model
{
	protected $table = 'ROL';
	protected $primaryKey = 'idRol';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'bool'
	];

	protected $dates = [
		'FechaCreacion'
	];

	protected $fillable = [
		'TipoRol',
		'Estado',
		'FechaCreacion'
	];

	public function p_e_r_s_o_n_a_s()
	{
		return $this->hasMany(PERSONA::class, 'IdRol');
	}
}
