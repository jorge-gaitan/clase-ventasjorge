<?php

namespace App\Repositories;

use App\Models\Ventas;
use App\Repositories\BaseRepository;

/**
 * Class VentasRepository
 * @package App\Repositories
 * @version February 19, 2021, 9:17 pm UTC
*/

class VentasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'precio',
        'productos'
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
        return Ventas::class;
    }
}
