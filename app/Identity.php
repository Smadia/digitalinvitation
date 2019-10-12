<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $status_id status id
@property bigint $event_id event id
@property varchar $name name
@property enum $jenis_kelamin jenis kelamin
@property text $address address
@property timestamp $created_at created at
@property timestamp $updated_at updated at
@property Event $event belongsTo
@property Status $status belongsTo
   
 */
class Identity extends Model 
{
    const JENIS_KELAMIN_PRIA='Pria';

const JENIS_KELAMIN_WANITA='Wanita';

    /**
    * Database table name
    */
    protected $table = 'identities';

    /**
    * Mass assignable columns
    */
    protected $fillable=['status_id',
'event_id',
'name',
'jenis_kelamin',
'address'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * event
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function event()
    {
        return $this->belongsTo(Event::class,'event_id');
    }

    /**
    * status
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function status()
    {
        return $this->belongsTo(Status::class,'status_id');
    }




}