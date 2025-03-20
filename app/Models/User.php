<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'slug',
        'email',
        'no_telp',
        'password',
        'role_id',
        'status',
        'images',
        'ktp',
        'nik',
        'no_rek',
        'data_sosmed',
        'affiliate_alamat',
        'affiliate_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole($role)
    {
        return $this->role->name === $role;
    }
    
    public function alamat()
    {
        return $this->hasMany(Alamat::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function affiliates()
    {
        return $this->hasMany(Affiliate::class, 'user_id');
    }

    public function affiliateHistory()
    {
        return $this->hasMany(AffiliateHistory::class, 'user_id');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'data_sosmed' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($user) {
            if ($user->role->name === 'Affiliate') {
                $user->referral_code = strtoupper(Str::random(8));
            }
        });
    }    


}
