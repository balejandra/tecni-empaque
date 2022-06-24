<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Producto
 * @package App\Models
 * @version June 14, 2022, 4:06 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $marca
 * @property string $foto_principal
 * @property string $foto_2
 * @property string $foto_3
 * @property string $categoria_id
 */
class Producto extends Model implements Auditable
{

    use HasFactory, \OwenIt\Auditing\Auditable;

    public $table = 'productos';

    public $fillable = [
        'nombre',
        'descripcion',
        'marca',
        'foto_principal',
        'foto_2',
        'foto_3',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'marca' => 'string',
        'foto_principal' => 'string',
        'foto_2' => 'string',
        'foto_3' => 'string',
        'categoria_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'marca' => 'required',
        'foto_principal' => 'required',
        'categoria_id' => 'required'
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
