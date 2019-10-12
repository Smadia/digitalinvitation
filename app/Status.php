<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property timestamp $created_at created at
@property timestamp $updated_at updated at
@property \Illuminate\Database\Eloquent\Collection $identity hasMany
   
 */
class Status extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'statuses';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * identities
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function identities()
    {
        return $this->hasMany(Identity::class,'status_id');
    }



}