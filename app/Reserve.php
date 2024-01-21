<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Reserve extends Model
{
    protected $fillable = ['order_no'];
    protected $guarded = ['id'];

    public function reserves(){
        return $this->belongsTo(User::class,'user_id', 'id');
        return $this->belongsTo(Product::class,'product_id', 'id');
    }

    public function owner()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
