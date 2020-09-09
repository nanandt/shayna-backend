<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'product_id', 'name', 'type', 'description', 'price', 'slug', 'quantiry'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        // return $this->hasMany(ProductGallery::class, 'product_id');
    }
}
