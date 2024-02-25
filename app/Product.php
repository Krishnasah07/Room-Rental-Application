<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['status'];
    protected $guarded = ['id'];

    public function products()
{
    return $this->hasMany(Product::class);
}

}
