<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteShops extends Model
{
    use HasFactory;

    protected $fillable=[
        'shop_id',
        'phone_no',
        'location',
        'shop_likes'

    ];
}
