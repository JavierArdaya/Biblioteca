<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class PERSONA
 * 
 * @property int $IdPersona
 * @property string|null $Nombre
 * @property string|null $Apellido
 * @property string|null $Email
 * @property string|null $Password
 * @property string|null $Codigo
 * @property int|null $IdRol
 * @property bool|null $Estado
 * @property Carbon|null $FechaCreacion
 * 
 * @property ROL|null $r_o_l
 * @property Collection|PRESTAMO[] $p_r_e_s_t_a_m_o_s
 *
 * @package App\Models
 */
class PERSONA extends Authenticatable
{
	use HasApiTokens, HasFactory;
	//protected $table = 'PERSONA';
	//protected $primaryKey = 'IdPersona';
	//public $timestamps = false;

	//protected $casts = [
	//	'IdRol' => 'int',
	//	'Estado' => 'bool'
	//];

	//protected $dates = [
	//	'FechaCreacion'
	//];

	protected $fillable = [
		//'Nombre',
		//'Apellido',
		'Email',
		'Password',
		'Codigo',
		//'IdRol',
		//'Estado',
		//'FechaCreacion'
	];

	public function r_o_l()
	{
		return $this->belongsTo(ROL::class, 'IdRol');
	}

	public function p_r_e_s_t_a_m_o_s()
	{
		return $this->hasMany(PRESTAMO::class, 'IdPersona');
	}
	public function setPasswordAttribute($value)
	{
		$this->attributes['Password'] = bcrypt($value);
	}
}
