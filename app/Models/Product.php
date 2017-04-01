<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\ProductImage;
class Product extends Model
{
    use SoftDeletes;
    
    
  	protected $table = 'product';
  	protected $dates = ['deleted_at'];
  	protected $guarded = array('created_at', 'updated_at', 'deleted_at');

  		public function parent()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
       // return $this->hasOne('App\Models\ProductImage', 'product_id', 'id');
    }

}