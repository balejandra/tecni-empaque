<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Marca
 * @package App\Models
 * @version July 8, 2022, 9:56 pm UTC
 *
 * @property string $nombre
 * @property string $foto
 */
class Marca extends Model implements Auditable
{

    use HasFactory, \OwenIt\Auditing\Auditable;

    public $table = 'marcas';



    public $fillable = [
        'nombre',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'foto' => 'required'
    ];


}
