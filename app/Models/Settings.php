<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'popup_image', 'headnavbanner','banner_bundle_head', 'banner_bundle_one', 'banner_bundle_two', 'banner_bundle_tree','bg_promo_image','knowlage_home','knowlage_shop','bg_flashsale','banner_flashsale_home','timer_flashsale','bannershop_head_one','bannershop_head_two','banner_produk_terlaris'
    ];
}
