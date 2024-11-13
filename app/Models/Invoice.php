<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'invoice_number',
        'amount',
        'invoice_date',
        'payment_status',
        'bukti_tf',
    ];

    /**
     * Relasi dengan model Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
