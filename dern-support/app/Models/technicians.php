<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\DB;




class technicians extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'email' , 'address' , 'phone', 'password' , 'phone' , 'code' , 'role'
    ];
}
