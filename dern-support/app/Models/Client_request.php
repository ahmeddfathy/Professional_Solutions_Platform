<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_request extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name', 'service_name', 'category_name',
        'address' , 'phone' , 'price' , 'time'
    ];
}
