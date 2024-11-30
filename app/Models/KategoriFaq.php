<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriFaq extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kategori'];

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'kategori_faq_id');
    }
}
