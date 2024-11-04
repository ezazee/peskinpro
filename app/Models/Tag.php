<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $fillable = ['nama_tags','slug'];
    public $timestamps = true;

    public function article()
    {
        return $this->belongsToMany(Article::class);
    }

}
