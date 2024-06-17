<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPlaylist extends Model
{
    use HasFactory;
    protected $table='my_playlists';
    protected $fillable=[
        'playlist_name',
        'genre',
        'created_date',
        'image',
        'audio',
        'status'
    ];
}
