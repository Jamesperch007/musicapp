<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table='albums';
    protected $fillable=[
        'album_name',
        'slug',
        'artist_name',
        'genre',
        'release_date',
        'language',
        'image',
        'audio',
        'description',
        'status'
    ];
}
