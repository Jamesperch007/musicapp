<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoriteSongs extends Model
{
    use HasFactory;
    protected $table='favorites';
    protected $fillable=[
        'song_id',
        'user_id',
        'status'
    ];
    public function song()
    {
        return $this->belongsTo(Song::class, 'song_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
