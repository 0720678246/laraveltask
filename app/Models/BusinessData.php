<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessData extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable=[
        'user_id',
        'business_name',
        'business_mode',
        'products_type',
        'business_reg_no',
        'category',
        'building_name',
        'place_name',
        'city_name',
        'county',
        'gps_data'

    ];


}
