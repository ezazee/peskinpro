<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $fillable = ['images','tittle','content', 'slug','status','start_date', 'start_time', 'keyword', 'description','user_id','view'];
    public $timestamps = true;

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
