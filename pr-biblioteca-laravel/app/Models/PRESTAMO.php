<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PRESTAMO
 * 
 * @property int $IdPrestamo
 * @property int|null $IdEstadoPrestamo
 * @property int|null $IdPersona
 * @property int|null $IdLibro
 * @property Carbon|null $FechaDevolucion
 * @property Carbon|null $FechaConfirmacionDevolucion
 * @property string|null $EstadoEntregadoLibro
 * @property string|null $EstadoRecibidoLibro
 * @property bool|null $Estado
 * @property Carbon|null $FechaCreacion
 * 
 * @property PERSONA|null $p_e_r_s_o_n_a
 * @property ESTADOPRESTAMO|null $e_s_t_a_d_o_p_r_e_s_t_a_m_o
 * @property LIBRO|null $l_i_b_r_o
 *
 * @package App\Models
 */
class PRESTAMO extends Model
{
	protected $table = 'PRESTAMO';
	protected $primaryKey = 'IdPrestamo';
	public $timestamps = false;

	protected $casts = [
		'IdEstadoPrestamo' => 'int',
		'IdPersona' => 'int',
		'IdLibro' => 'int',
		'Estado' => 'bool'
	];

	protected $dates = [
		'FechaDevolucion',
		'FechaConfirmacionDevolucion',
		'FechaCreacion'
	];

	protected $fillable = [
		'IdEstadoPrestamo',
		'IdPersona',
		'IdLibro',
		'FechaDevolucion',
		'FechaConfirmacionDevolucion',
		'EstadoEntregadoLibro',
		'EstadoRecibidoLibro',
		'Estado',
		'FechaCreacion'
	];

	public function p_e_r_s_o_n_a()
	{
		return $this->belongsTo(PERSONA::class, 'IdPersona');
	}

	public function e_s_t_a_d_o_p_r_e_s_t_a_m_o()
	{
		return $this->belongsTo(ESTADOPRESTAMO::class, 'IdEstadoPrestamo');
	}

	public function l_i_b_r_o()
	{
		return $this->belongsTo(LIBRO::class, 'IdLibro');
	}
}
