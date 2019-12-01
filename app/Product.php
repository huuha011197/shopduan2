<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
        protected $fillable = [
    	'name'
    ];
    public function danh_muc(){
    	return $this->hasMany('App/BillDetail',"id_product",'id');
    }
}
