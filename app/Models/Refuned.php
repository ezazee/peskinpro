<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refuned extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'return_number', 'nominal', 'status', 'reason'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
