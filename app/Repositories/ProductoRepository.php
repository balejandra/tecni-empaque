<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version June 14, 2022, 4:06 pm UTC
*/

class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre',
        'descripcion',
        'marca',
        'foto_principal',
        'foto_2',
        'foto_3',
        'categoria_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Producto::class;
    }
}
