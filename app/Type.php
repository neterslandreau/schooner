<?php namespace App;

class Type extends Model
{

    protected $fillable = ['name', 'description', 'order'];

    protected $table = 'types';

    public function items()
    {
    	return $this->hasMany(Item::class);
    }

}
