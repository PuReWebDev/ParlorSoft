<?php

namespace App\Repositories;

use App\Models\Shop;
use App\Repositories\BaseRepository;

/**
 * Class ShopRepository
 * @package App\Repositories
 * @version February 18, 2020, 8:20 am UTC
*/

class ShopRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'complex_name',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'zip'
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
        return Shop::class;
    }
}
