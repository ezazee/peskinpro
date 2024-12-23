<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    public $fillable = ['nama_bank','atas_nama','no_rek'];
    public $timestamps = true;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
