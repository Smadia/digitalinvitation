<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property varchar $name name
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 * @property \Illuminate\Database\Eloquent\Collection $event hasMany
 */
class Type extends Model
{

    /**
     * Database table name
     */
    protected $table = 'types';

    /**
     * Mass assignable columns
     */
    protected $fillable = ['name'];

    /**
     * Date time columns.
     */
    protected $dates = [];

    /**
     * events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Event::class, 'type_id');
    }


}
