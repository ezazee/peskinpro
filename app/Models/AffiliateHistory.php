<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'affiliate_id',
        'type',
        'amount',
        'history_status',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class);
    }

    public function order()
    {
        return $this->hasOneThrough(Order::class, Affiliate::class, 'id', 'id', 'affiliate_id', 'order_id');
    }

    public function referredUser()
    {
        return $this->hasOneThrough(User::class, Affiliate::class, 'id', 'id', 'affiliate_id', 'referred_user_id');
    }

    public function withdraw()
    {
        return $this->belongsTo(Withdraw::class, 'withdraw_id');
    }    
    
}
