<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use APP\Model\Review;

class Product extends Model
{
    protected $fillable = [
		'name','detail','stock','price','discount'
	];
    public function reviews()
    {
    	return $this->hasMany(Review::class); 
    }
}
