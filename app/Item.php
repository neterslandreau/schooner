<?php namespace App;


class Item extends Model
{

    protected $table = 'items';

    protected $fillable = ['description', 'name', 'slug', 'price', 'featured', 'type_id'];

    public function type()
    {
    	return $this->belongsTo(Type::class);
    }

    public static function featuredItems()
    {
    	return static::where('featured', true)->get();
    }

    public static function getItems(string $slug)
    {
    	$type = Type::where('slug', $slug)->first();
    	return static::where('type_id', $type->id)->get();
    }

}
