<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;
    protected $table='favourites';
    protected $fillable=[
        'song_name',
        'genre',
        'artist_name',
        'image',
        'audio',
        'status'
    ];
}
