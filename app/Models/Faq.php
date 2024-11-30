<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'kategori_faq_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriFaq::class, 'kategori_faq_id');
    }
}
