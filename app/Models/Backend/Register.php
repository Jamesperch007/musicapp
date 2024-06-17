<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table='registers';
    protected $fillable=[
        'full_name',
        'email',
        'user_name',
        'password',
        'status'
    ];
}
