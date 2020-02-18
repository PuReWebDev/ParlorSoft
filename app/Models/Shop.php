<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Shop",
 *      required={"name", "address_line_1", "city", "state", "zip"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="complex_name",
 *          description="complex_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address_line_1",
 *          description="address_line_1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address_line_2",
 *          description="address_line_2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="city",
 *          description="city",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="state",
 *          description="state",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="zip",
 *          description="zip",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Shop extends Model
{
    use SoftDeletes;

    public $table = 'shops';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'complex_name',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'zip'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'complex_name' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'complex_name' => 'nullable',
        'address_line_1' => 'required',
        'address_line_2' => 'nullable',
        'city' => 'required',
        'state' => 'required',
        'zip' => 'required'
    ];

    
}
