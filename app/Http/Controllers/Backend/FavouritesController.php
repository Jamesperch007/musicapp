<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Favourite;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Favouritesongs = Favourite::orderBy('created_at','DESC')->get();
        return view('Backend.favourite.view',compact('Favouritesongs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.favourite.add');
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
            'genre' => 'required',
            'artist_name' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'status' => 'required|in:active,inactive'

        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Favourite/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioname = time() . '_' . $audio->getClientOriginalName();
            $path = public_path('upload/Favourite/');
            $audio->move($path,$audioname);   
        }else{
            $audioname='audio.mp3';
        }
    

        $Favouritesongs = new Favourite();
        $Favouritesongs->song_name = $request->get('song_name');
        $Favouritesongs->genre = $request->get('genre');
        $Favouritesongs->artist_name = $request->get('artist_name');
        $Favouritesongs->image = $fileNameToStore;
        $Favouritesongs->audio = $audioname;
        $Favouritesongs->status = $request->get('status');
        $status = $Favouritesongs->save();

        if($status){
            return redirect()->route('favourite.index')->with('success','favourite songs created successfully');
        }else{
            return redirect()->route('favourite.index')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Favouritesongs = Favourite::findOrFail($id);
        return view('Backend.favourite.edit',compact('Favouritesongs'));
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
            'genre' => 'required',
            'artist_name' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'status' => 'required|in:active,inactive'

        ]);

        $Favouritesongs = Favourite::findOrFail($id);

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/Favourite/'.$Favouritesongs->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/Favourite/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $Favouritesongs->image;
        }

        if($request->hasFile('audio')){
            $oldAudioPath = public_path().'/upload/Favourite/'.$Favouritesongs->audio;
            if(\File::exists($oldAudioPath)){
                \File::delete($oldAudioPath);
            }

            $newPath = public_path().'/upload/Favourite/';
            $file = $request->file('audio');
            $randomName = $file->hashName();
            $filenameForAudio = 'UpdatedAudioTwo_'.$randomName;
            $file->move($newPath,$filenameForAudio);
        }else{
            $filenameForAudio = $Favouritesongs->audio;
        }

       
        $Favouritesongs->song_name = $request->get('song_name');
        $Favouritesongs->genre = $request->get('genre');
        $Favouritesongs->artist_name = $request->get('artist_name');
        $Favouritesongs->image = $fileNameToStoreImage;
        $Favouritesongs->audio = $filenameForAudio;
        $Favouritesongs->status = $request->get('status');
        $status = $Favouritesongs->save();


        if($status){
            return redirect()->route('favourite.index')->with('success','favourite song updated successfully');
        }else{
            return redirect()->route('favourite.index')->with('error','Something went wrong!Please try again later');
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
        $Favouritesongs = Favourite::findOrFail($id);
        $BannerPath = public_path().'/upload/Favourite/'.$Favouritesongs->banner_image;
        $ImagePath = public_path().'/upload/Favourite/'.$Favouritesongs->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }
        
        $Favouritesongs = Favourite::find($id);

        $status = $Favouritesongs->delete();
        if($status){
            return redirect()->route('favourite.index')->with('success','Favourite songs deleted successfully');
        }else{
            return redirect()->route('favourite.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
