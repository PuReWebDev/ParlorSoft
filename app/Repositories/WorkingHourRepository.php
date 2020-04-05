<?php

namespace App\Repositories;

use App\Models\WorkingHour;
use App\Repositories\BaseRepository;

/**
 * Class WorkingHourRepository
 * @package App\Repositories
 * @version February 23, 2020, 9:01 am UTC
*/

class WorkingHourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employee_id',
        'date',
        'start_time',
        'finish_time'
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
        return WorkingHour::class;
    }
}
