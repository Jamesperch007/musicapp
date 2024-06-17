<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table='histories';
    protected $fillable=[
        'user_name',
        'song_name',
        'genre',
        'artist_name',
        'image',
        'status'
    ];
}
