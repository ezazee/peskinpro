<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];
    public function alamat()
{
    return $this->hasMany(Alamat::class);
}

}
