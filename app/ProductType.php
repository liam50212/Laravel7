<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    // protected $table = 'product_types';
    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany('App\Products','type_id','id');
    }
}
