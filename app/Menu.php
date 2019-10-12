<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property timestamp $created_at created at
@property timestamp $updated_at updated at
@property \Illuminate\Database\Eloquent\Collection $menuItem hasMany
   
 */
class Menu extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'menus';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * menuItems
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class,'menu_id');
    }



}