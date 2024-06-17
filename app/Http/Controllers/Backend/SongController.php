<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Songsdetail = Song::orderBy('created_at','DESC')->get();
        return view('Backend.song.view',compact('Songsdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.song.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'song_name' => 'required',
            'album_name' => 'required',
            'slug' => 'required',
            'plays' => 'required',
            'likes' => 'required',
            'genre' => 'required',
            'release_date' => 'required',
            'language' => 'required',
            'artist_name' => 'required',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'status' => 'required|in:active,inactive'

        ]);
        
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioname = time() . '_' . $audio->getClientOriginalName();
            $path = public_path('upload/Song/');
            $audio->move($path,$audioname);   
        }else{
            $audioname='audio.mp3';
        }

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Song/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }
       
    

        $Songsdetail = new Song();
        $Songsdetail->song_name = $request->get('song_name');
        $Songsdetail->album_name = $request->get('album_name');
        $Songsdetail->slug = $request->get('slug');
        $Songsdetail->plays = $request->get('plays');
        $Songsdetail->likes = $request->get('likes');
        $Songsdetail->genre = $request->get('genre');
        $Songsdetail->release_date = $request->get('release_date');
        $Songsdetail->language = $request->get('language');
        $Songsdetail->artist_name = $request->get('artist_name');
        $Songsdetail->audio = $audioname;
        $Songsdetail->image = $fileNameToStore;
        $Songsdetail->status = $request->get('status');
        $status = $Songsdetail->save();

        if($status){
            return redirect()->route('song.index')->with('success',' songs created successfully');
        }else{
            return redirect()->route('song.index')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $song = Song::where('slug', $slug)->firstOrFail();
        $Songsdetail = Song::where('status', 'active')->get();
        return view('frontend.show', compact('song','Songsdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Songsdetail = Song::findOrFail($id);
        return view('Backend.song.edit',compact('Songsdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'song_name' => 'required',
            'album_name' => 'required',
            'slug' => 'required',
            'plays' => 'required',
            'likes' => 'required',
            'genre' => 'required',
            'release_date' => 'required',
            'language' => 'required',
            'artist_name' => 'required',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'status' => 'required|in:active,inactive'

        ]);

        $Songsdetail = Song::findOrFail($id);

        if($request->hasFile('audio')){
            $oldAudioPath = public_path().'/upload/Song/'.$Songsdetail->audio;
            if(\File::exists($oldAudioPath)){
                \File::delete($oldAudioPath);
            }

            $newPath = public_path().'/upload/Song/';
            $file = $request->file('audio');
            $randomName = $file->hashName();
            $filenameForAudio = 'UpdatedAudioTwo_'.$randomName;
            $file->move($newPath,$filenameForAudio);
        }else{
            $filenameForAudio = $Songsdetail->audio;
        }

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/Song/'.$Songsdetail->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/Song/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $Songsdetail->image;
        }

        

       
        $Songsdetail->song_name = $request->get('song_name');
        $Songsdetail->album_name = $request->get('album_name');
        $Songsdetail->slug = $request->get('slug');
        $Songsdetail->plays = $request->get('plays');
        $Songsdetail->likes = $request->get('likes');
        $Songsdetail->genre = $request->get('genre');
        $Songsdetail->release_date = $request->get('release_date');
        $Songsdetail->language = $request->get('language');
        $Songsdetail->artist_name = $request->get('artist_name');
        $Songsdetail->audio = $filenameForAudio;
        $Songsdetail->image = $fileNameToStoreImage;
        $Songsdetail->status = $request->get('status');
        $status = $Songsdetail->save();


        if($status){
            return redirect()->route('song.index')->with('success','song song updated successfully');
        }else{
            return redirect()->route('song.index')->with('error','Something went wrong!Please try again later');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Songsdetail = Song::findOrFail($id);
        $BannerPath = public_path().'/upload/Song/'.$Songsdetail->banner_image;
        $ImagePath = public_path().'/upload/Song/'.$Songsdetail->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }
        
        $Songsdetail = Song::find($id);

        $status = $Songsdetail->delete();
        if($status){
            return redirect()->route('song.index')->with('success',' songs deleted successfully');
        }else{
            return redirect()->route('song.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
