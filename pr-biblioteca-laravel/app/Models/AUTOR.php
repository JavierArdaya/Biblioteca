<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AUTOR
 * 
 * @property int $IdAutor
 * @property string|null $Descripcion
 * @property bool|null $Estado
 * @property Carbon|null $FechaCreacion
 * 
 * @property Collection|LIBRO[] $l_i_b_r_o_s
 *
 * @package App\Models
 */
class AUTOR extends Model
{
	protected $table = 'AUTOR';
	protected $primaryKey = 'IdAutor';
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

	public function l_i_b_r_o_s()
	{
		return $this->hasMany(LIBRO::class, 'IdAutor');
	}
}
