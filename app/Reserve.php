<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Product;

class Reserve extends Model
{
    use SoftDeletes;
    protected $fillable = ['order_no'];
    protected $guarded = ['id'];

    public function owner()
    {
        return $this->hasOne(User::class, 'id','landlord_id');
    }

    public function productinfo()
    {
        return $this->hasOne(Product::class, 'id','product_id');
    }

    public function renterinfo()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}


