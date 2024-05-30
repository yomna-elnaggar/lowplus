<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'customer_number',
       'name' ,
        'phone' ,
        'country',
        'city',
        'region',
        'address' ,
        'type' ,
        'national_id',
        'tax_number2' ,
        'tax_number' ,
        'email' ,
        'password' ,
        'tax_image',
        'image' ,
        'national_image' ,
        'files'
    ];
}
