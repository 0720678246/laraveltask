<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'name',
        'description',
        'category',
        'product_type',
        'price',
        'charge',
        'charge_type',
        'images'

    ];
}
