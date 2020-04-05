<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Employee",
 *      required={"first_name", "last_name", "full_name", "cell_phone", "email"},
 *      @SWG\Property(
 *          property="first_name",
 *          description="first_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="last_name",
 *          description="last_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="full_name",
 *          description="full_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cell_phone",
 *          description="cell_phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="shop_id",
 *          description="shop_id",
 *          type="integer",
 *          format="int32"
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
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'cell_phone',
        'email',
        'shop_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'full_name' => 'string',
        'cell_phone' => 'string',
        'email' => 'string',
        'shop_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|alpha',
        'last_name' => 'required|alpha',
        'full_name' => 'required',
        'cell_phone' => 'required',
        'email' => 'required|email:rfc,dns',
        'shop_id' => 'integer'
    ];


}
