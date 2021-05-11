<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $img
 * @property string $content
 * @property int $price
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Products';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['type', 'name', 'img', 'content', 'price', 'created_at', 'updated_at'];

}