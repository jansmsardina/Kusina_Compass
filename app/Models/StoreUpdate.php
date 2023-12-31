<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreUpdate extends Model
{
    use HasFactory;

    protected $table = 'store_updates';
    protected $fillable = [
        'user_id',
        'name',
        'photo',
        'contact',
        'opening_time',
        'closing_time',
        'address',      
    ];
}
//push partial