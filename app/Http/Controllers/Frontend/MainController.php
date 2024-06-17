<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Album;
use App\Models\Backend\Artist;
use App\Models\Backend\favorite;
use App\Models\Backend\favoriteSongs;
use App\Models\Backend\Favourite;
use App\Models\Backend\Genre;
use App\Models\Backend\Register;
use App\Models\Backend\Signin;
use App\Models\Backend\Signup;
use App\Models\Backend\Song;
use App\Models\Playlist;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $trendingSongs = Song::with('artist')
            ->where('status', 'active')
            ->orderBy('plays', 'desc')
            ->take(10)
            ->get();
        $Artistlist = Artist::where('status', 'active')->orderBy('created_at', 'DESC')->get();
        $songs = Song::limit(10)->get();
        $genres = Genre::all();
        return view('Frontend.index', compact('trendingSongs','Artistlist','songs','genres'));
    }




    public function artists()
    {
        // dd('artist');
        $Artistlist = Artist::where('status', 'active')->orderBy('created_at', 'DESC')->get();
        return view('Frontend.artists', compact('Artistlist'));
    }

    public function artistdetail($slug)
    {
        // dd('myplaylist');
        $Artistdetail = Artist::where('slug', $slug)->first();
        // $Songsdetail = Song::where('status','active')->get();
        // $Artistdetail = Artist::where('slug', $slug)->with('songs')->first();
        $Songsdetail = Song::where('artist_name', $Artistdetail->artist_name)->get();
        return view('Frontend.artistdetail', compact('Artistdetail', 'Songsdetail'));
    }

    public function playlists()
    {
        // dd('myplaylist');
        return view('Frontend.playlists');
    }

    public function songs()
    {
        // dd('myplaylist');
        $Songsdetail = Song::where('status', 'active')->get();
        $playlists = Playlist::where('user_id', Auth::id())->get();
        return view('Frontend.songs', compact('Songsdetail', 'playlists'));
    }



    public function favorite()
    {
        $user = Auth::User();
        $favorites = favoriteSongs::where('status', 'active')->with('song')->with('user')->get();
        // dd($favorites);
        return view('Frontend.favorite', compact('favorites'));
    }

    public function genre()
    {
        // dd('myplaylist');
        $Genrelist = Genre::where('status', 'active')->get();
        
        return view('Frontend.genre', compact('Genrelist'));
    }


    public function genredetail($slug)
    {
        // dd('myplaylist');
        $Genredetails = Genre::where('slug', $slug)->firstOrFail();

        // Get the songs associated with this genre
        $Songsdetail = Song::where('genre', $Genredetails->title)->get();
        // dd($Genredetails, $Songsdetail);
        return view('Frontend.genredetail', compact('Genredetails','Songsdetail'));
    }
    public function playsong()
    {
        // dd('myplaylist');
        return view('Frontend.playsong');
    }
    // public function home()
    // {
    //     // dd('myplaylist');
    //     $trendingSongs = Song::where('trending', true)->take(10)->get();
    //     return view('Frontend.index', compact('trendingSongs'));
    // }
    public function history()
    {
        // dd('myplaylist');
        return view('Frontend.history');
    }
    public function album()
    {
        // dd('myplaylist');
        $Albumdetail = Album::where('status', 'active')->get();
        return view('Frontend.album',compact('Albumdetail'));
    }
    public function albumdetail($slug)
    {
        // dd('myplaylist');
        $Albumdetail = Album::where('slug', $slug)->first();
        $Songsdetail = Song::where('album_name', $Albumdetail->album_name)->get();
        return view('Frontend.albumdetail',compact('Albumdetail','Songsdetail'));
    }
    public function about()
    {
        // dd('myplaylist');
        return view('Frontend.about');
    }
    public function contacts()
    {
        // dd('myplaylist');
        return view('Frontend.contacts');
    }
    public function signin()
    {
        // $Signindetail = Signin::all();
        return view('Frontend.signin');
    }
    public function signup(Request $request)
    {
        //dd($request->all());
        
        return view('Frontend.signup');
    }
    public function register(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'user_name' => 'required',
            'password' => 'required',
        ]);
        

        $Registerdetail = new Register();
        $Registerdetail->full_name = $request->full_name;
        $Registerdetail->email = $request->email;
        $Registerdetail->user_name = $request->user_name;
        $Registerdetail->password = $request->password;
        $status = $Registerdetail->save();
        if ($status) {
            return redirect()->back()->with('success');
        }
    }

    public function createPlaylist(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $playlist = new Playlist([
            'user_id' => Auth::id(),
            'name' => $request->name,
        ]);
        $playlist->save();

        return redirect()->route('playlists.index')->with('success', 'Playlist created successfully.');
    }

    // public function addSongToPlaylist(Request $request, $playlistId)
    // {
    //     $playlist = Playlist::find($playlistId);
    //     $song = Song::find($request->input('song_id'));

    //     if ($playlist && $song && $playlist->user_id == Auth::id()) {
    //         $playlist->songs()->attach($song->id);
    //         return redirect()->back()->with('success', 'Song added to playlist.');
    //     }

    //     return redirect()->back()->with('error', 'Failed to add song to playlist.');
    // }

    public function showPlaylists()
    {
        $playlists = Playlist::all(); // Example: Fetch playlists from the database

        return view('Frontend.playlists', [
            'playlists' => $playlists,
        ]);
    }
    // public function playlists()
    // {
    //     $user = Auth::user();
    //     // Retrieve playlists with their songs
    //     $playlists = Playlist::with('songs')->where('user_id', $user->id)->get();

    //     return view('Frontend.playlists', compact('playlists'));
    // }


    public function showSongs()
    {
        $Songsdetail = Song::all();
        $playlists = Playlist::where('user_id', Auth::id())->get();

        // Debug statement
        dd($Songsdetail, $playlists);

        return view('Frontend.songs', [
            'Songsdetail' => $Songsdetail,
            'playlists' => $playlists,
        ]);
    }

    public function addSongToPlaylist(Request $request, $playlistId)
    {
        $playlist = Playlist::find($playlistId);
        $song = Song::find($request->input('song_id'));

        if ($playlist && $song && $playlist->user_id == Auth::id()) {
            $playlist->songs()->attach($song->id);
            return redirect()->back()->with('success', 'Song added to playlist.');
        }

        return redirect()->back()->with('error', 'Failed to add song to playlist.');
    }
}
