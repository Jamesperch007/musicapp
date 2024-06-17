<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table='genres';
    protected $fillable=[
        'title',
        'image',
        'description',
        'slug',
        'status'
    ];
}
