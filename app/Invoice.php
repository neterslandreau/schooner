<?php namespace App;

class Invoice extends Model
{
    protected $table = 'invoices';

        protected $fillable = ['email', 'phone', 'name', 'slug', 'total', 'charge_type'];

        // public function item()
        // {
        // 	return $this->hasMany(Type::class);
        // }

}
