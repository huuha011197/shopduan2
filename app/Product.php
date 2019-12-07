<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
        protected $fillable = [
    	'id', 'name','id_type','description','unit_price','promotion_price','image','unit','new','quantity'
    ];

    public function danh_muc(){
    	return $this->hasMany('App/BillDetail',"id_product",'id');
    }

    public function product_type()
    {
        return $this->belongsTo('App\ProductType', 'id');
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
