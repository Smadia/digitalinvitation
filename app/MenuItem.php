<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
   @property int $menu_id menu id
@property varchar $title title
@property varchar $url url
@property varchar $target target
@property varchar $icon_class icon class
@property varchar $color color
@property int $parent_id parent id
@property int $order order
@property timestamp $created_at created at
@property timestamp $updated_at updated at
@property varchar $route route
@property text $parameters parameters
@property Menu $menu belongsTo
   
 */
class MenuItem extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'menu_items';

    /**
    * Mass assignable columns
    */
    protected $fillable=['parameters',
'menu_id',
'title',
'url',
'target',
'icon_class',
'color',
'parent_id',
'order',
'route',
'parameters'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * menu
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }




}