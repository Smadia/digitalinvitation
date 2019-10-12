<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property bigint $event_id event id
 * @property varchar $name name
 * @property timestamp $started_at started at
 * @property timestamp $ended_at ended at
 * @property text $address address
 * @property text $helper helper
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 * @property Event $event belongsTo
 */
class Agenda extends Model
{

    /**
     * Database table name
     */
    protected $table = 'agendas';

    /**
     * Mass assignable columns
     */
    protected $fillable = ['event_id',
        'name',
        'started_at',
        'ended_at',
        'address',
        'helper'];

    /**
     * Date time columns.
     */
    protected $dates = ['started_at',
        'ended_at'];

    /**
     * event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }


}
