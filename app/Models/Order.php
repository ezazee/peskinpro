<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'order_number', 'total_amount', 'status', 'alamat_id','payment_method','kembali','kode_bayar','bank_id','discount_chekout'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
            ->withPivot('quantity', 'size_id', 'harga', 'discount', 'alamat_id', 'penerima', 'label', 'province_name','city_name','kecamatan','kelurahan','street','postal_code','no_telp');
    }    

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'shipping_id');
    }

    public function returns()
    {
        return $this->hasMany(Returned::class);
    }

    public function refunds()
    {
        return $this->hasMany(Refuned::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'order_coupon');
    }
}
