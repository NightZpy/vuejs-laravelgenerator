<?php

namespace App\Models;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="Provider",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="code",
 *          description="code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="specialty",
 *          description="specialty",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="district",
 *          description="district",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="movil1",
 *          description="movil1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="movil2",
 *          description="movil2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="contact",
 *          description="contact",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      )
 * )
 */
class Provider extends Model
{

    public $table = 'providers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'code',
        'name',
        'specialty',
        'district',
        'address',
        'phone',
        'movil1',
        'movil2',
        'contact',
        'email',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'name' => 'string',
        'specialty' => 'string',
        'district' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'movil1' => 'string',
        'movil2' => 'string',
        'contact' => 'string',
        'email' => 'string',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required|integer',
        'specialty' => 'required|min:2|max:32'
    ];
}
