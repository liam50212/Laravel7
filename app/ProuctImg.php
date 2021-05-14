<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProuctImg extends Model
{
    //
    protected $table ='product_imgs';
    protected $fillable =['product_id','img'];
}
