<?php declare(strict_types=1);

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Appointment",
 *      required={"shop_id", "client_id", "employee_id", "service_id", "date", "time"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="shop_id",
 *          description="shop_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="client_id",
 *          description="client_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="employee_id",
 *          description="employee_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="service_id",
 *          description="service_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="date",
 *          description="date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="time",
 *          description="time",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="comments",
 *          description="comments",
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
class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointments';
    /** @var array $dates */
    protected $dates = ['deleted_at'];

    /** @var array $fillable */
    public $fillable = [
        'shop_id',
        'client_id',
        'employee_id',
        'service_id',
        'date',
        'time',
        'comments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'shop_id'       => 'integer',
        'client_id'     => 'integer',
        'employee_id'   => 'integer',
        'service_id'    => 'integer',
        'date'          => 'date',
        'time'          => 'string',
        'comments'      => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shop_id'       => 'required|integer',
        'client_id'     => 'required|integer',
        'employee_id'   => 'required|integer',
        'service_id'    => 'required|integer',
        'date'          => 'required|date',
        'time'          => 'required'
    ];
}
