<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'discount',
        'front_image',
        'back_image',
        'longdescription',
        'ingredients',
        'howtouse'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function imagedetail()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }
    
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
