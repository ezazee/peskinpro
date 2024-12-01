<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Coupons extends Model
{
    use HasFactory;
    protected $fillable = [
        'status', 'start_date', 'end_date', 'coupons_code', 'minimum_purchase', 'limits', 'type', 'jumlah',
    ];

    public function isActive()
    {
        $currentDate = now();
        return $this->status === 'active' && $this->start_date <= $currentDate && $this->end_date >= $currentDate;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_coupon');
    }

    public function isUsed()
    {
        return $this->orders()->where('user_id', Auth::id())->exists();
    }

    public function hasAvailableUses()
    {
        return $this->limits > 0;
    }

    public function meetsMinimumPurchase($purchaseAmount)
    {
        return $this->minimum_purchase ? $purchaseAmount >= $this->minimum_purchase : true;
    }
}
