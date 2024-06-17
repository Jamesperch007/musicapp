<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Song;
use App\Models\Backend\favoriteSongs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    public function addFavorite(Request $request)
    {
        $request->validate([
            'song_id' => 'required|exists:songs,id',
        ]);

        $user = Auth::user();
        $user->favoriteSongs()->attach($request->song_id);

        return response()->json(['message' => 'Song added to favorites successfully!']);
    }

    public function favorite()
    {
        $user = Auth::user();
        $favorites =favoriteSongs::where('status', 'active')->with('user')->get();

        return view('Frontend.favorite', compact('favorites'));
    }
}
