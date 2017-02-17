<?php namespace App;


class Item extends Model
{

    protected $table = 'items';

    protected $fillable = ['description', 'name', 'slug', 'price', 'featured', 'type_id'];

    public function type()
    {
    	return $this->belongsTo(Type::class);
    }

}
