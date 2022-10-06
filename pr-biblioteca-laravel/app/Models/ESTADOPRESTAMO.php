<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ESTADOPRESTAMO
 * 
 * @property int $IdEstadoPrestamo
 * @property string|null $Descripcion
 * @property bool|null $Estado
 * @property Carbon|null $FechaCreacion
 * 
 * @property Collection|PRESTAMO[] $p_r_e_s_t_a_m_o_s
 *
 * @package App\Models
 */
class ESTADOPRESTAMO extends Model
{
	protected $table = 'ESTADO_PRESTAMO';
	protected $primaryKey = 'IdEstadoPrestamo';
	public $timestamps = false;

	protected $casts = [
		'Estado' => 'bool'
	];

	protected $dates = [
		'FechaCreacion'
	];

	protected $fillable = [
		'Descripcion',
		'Estado',
		'FechaCreacion'
	];

	public function p_r_e_s_t_a_m_o_s()
	{
		return $this->hasMany(PRESTAMO::class, 'IdEstadoPrestamo');
	}
}
