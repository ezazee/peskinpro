<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'province_id',
        'city_id',
        'street',
        'postal_code',
    ];

    /**
     * Get the user that owns the address.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the province that the address belongs to.
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get the city that the address belongs to.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
