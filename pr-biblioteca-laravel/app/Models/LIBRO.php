<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LIBRO
 * 
 * @property int $IdLibro
 * @property string|null $Titulo
 * @property string|null $RutaFoto
 * @property string|null $Isbn
 * @property string|null $NombrePortada
 * @property string|null $TipoEncuadernacion
 * @property int|null $IdAutor
 * @property int|null $IdCategoria
 * @property int|null $IdEditorial
 * @property string|null $UbicacionEstanteria
 * @property int|null $EjemplaresCantidad
 * @property bool|null $Estado
 * @property Carbon|null $FechaCreacion
 * 
 * @property CATEGORIUM|null $c_a_t_e_g_o_r_i_u_m
 * @property AUTOR|null $a_u_t_o_r
 * @property EDITORIAL|null $e_d_i_t_o_r_i_a_l
 * @property Collection|PRESTAMO[] $p_r_e_s_t_a_m_o_s
 *
 * @package App\Models
 */
class LIBRO extends Model
{
	protected $table = 'LIBRO';
	protected $primaryKey = 'IdLibro';
	public $timestamps = false;

	protected $casts = [
		'IdAutor' => 'int',
		'IdCategoria' => 'int',
		'IdEditorial' => 'int',
		'EjemplaresCantidad' => 'int',
		'Estado' => 'bool'
	];

	protected $dates = [
		'FechaCreacion'
	];

	protected $fillable = [
		'Titulo',
		'RutaFoto',
		'Isbn',
		'NombrePortada',
		'TipoEncuadernacion',
		'IdAutor',
		'IdCategoria',
		'IdEditorial',
		'UbicacionEstanteria',
		'EjemplaresCantidad',
		'Estado',
		'FechaCreacion'
	];

	public function c_a_t_e_g_o_r_i_u_m()
	{
		return $this->belongsTo(CATEGORIUM::class, 'IdCategoria');
	}

	public function a_u_t_o_r()
	{
		return $this->belongsTo(AUTOR::class, 'IdAutor');
	}

	public function e_d_i_t_o_r_i_a_l()
	{
		return $this->belongsTo(EDITORIAL::class, 'IdEditorial');
	}

	public function p_r_e_s_t_a_m_o_s()
	{
		return $this->hasMany(PRESTAMO::class, 'IdLibro');
	}
}
