<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipping_service', 'tracking_number', 'shipping_cost', 'estimated_delivery', 'status',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'shipping_id');
    }
}
