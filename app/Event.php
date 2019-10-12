<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property bigint $type_id type id
 * @property bigint $user_id user id
 * @property varchar $name name
 * @property varchar $slug slug
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 * @property User $user belongsTo
 * @property Type $type belongsTo
 * @property \Illuminate\Database\Eloquent\Collection $agenda hasMany
 * @property \Illuminate\Database\Eloquent\Collection $identity hasMany
 */
class Event extends Model
{

    /**
     * Database table name
     */
    protected $table = 'events';

    /**
     * Mass assignable columns
     */
    protected $fillable = ['type_id',
        'user_id',
        'name',
        'slug'];

    /**
     * Date time columns.
     */
    protected $dates = [];

    /**
     * user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    /**
     * agendas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'event_id');
    }

    /**
     * identities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function identities()
    {
        return $this->hasMany(Identity::class, 'event_id');
    }


}
