<?php

namespace App\Http\Controllers;

use App\Models\Backend\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function addSongToPlaylist(Request $request, $playlistId)
    {
        // Validate input if necessary
        $request->validate([
            'song_id' => 'required|exists:songs,id',
        ]);

        $playlist = Playlist::findOrFail($playlistId);
        $song = Song::findOrFail($request->song_id);

        // Attach song to the playlist
        $playlist->songs()->attach($song);

        return response()->json(['message' => 'Song added to playlist successfully'], 200);
    }
}
