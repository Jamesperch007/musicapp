<?php

namespace App\Models\Backend;

use App\Models\Playlist;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;

class Song extends Model
{
    use HasFactory;
    protected $table='songs';
    protected $fillable=[
        'song_name',
        'album_name',
        'genre',
        'release_date',
        'language',
        'artist_name',
        'audio',
        'image',
        'slug',
        'plays',
        'likes',
        'status'
    ];
    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_songs')->withTimestamps();
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
