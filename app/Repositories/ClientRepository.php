<?php declare(strict_types=1);

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\BaseRepository;

/**
 * Class ClientRepository
 * @package App\Repositories
 * @version February 23, 2020, 9:21 am UTC
*/
class ClientRepository extends BaseRepository
{
    /** @var array $fieldSearchable */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'full_name',
        'phone',
        'email'
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
        return Client::class;
    }
}
