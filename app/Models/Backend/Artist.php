<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table='artists';
    protected $fillable=[
        'artist_name',
        'nick_name',
        'slug',
        'age',
        'awards',
        'social_media',
        'image',
        'description',
        'audio',
        'status'
    ];

    protected $casts = [
        'audio' => 'array', // Cast audio as an array
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
