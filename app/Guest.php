<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property varchar $name name
 * @property varchar $slug slug
 * @property varchar $phone phone
 * @property varchar $email email
 * @property text $address address
 * @property timestamp $confirmed_web_at confirmed web at
 * @property timestamp $confirmed_arrival_at confirmed arrival at
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 */
class Guest extends Model
{

    /**
     * Database table name
     */
    protected $table = 'guests';

    /**
     * Mass assignable columns
     */
    protected $fillable = ['name',
        'slug',
        'phone',
        'email',
        'address',
        'confirmed_web_at',
        'confirmed_arrival_at'];

    /**
     * Date time columns.
     */
    protected $dates = ['confirmed_web_at',
        'confirmed_arrival_at'];


}
