<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    // protected $guarded = ['view'];
    protected $fillable = ['tittle','date','img','content','view','created_at','updated_at'];
}
