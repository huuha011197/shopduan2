<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
        protected $fillable = [
    	'name','id_type','description','unit_price','promotion_price','image','unit','new'
    ];
    public function danh_muc(){
    	return $this->hasMany('App/BillDetail',"id_product",'id');
    }
}
