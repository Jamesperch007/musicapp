<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Artistdetail = Artist::orderBy('created_at','DESC')->get();
        return view('Backend.artist.view',compact('Artistdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.artist.add');
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
            'artist_name' => 'required',
            'slug' => 'required',
            'nick_name' => 'required',
            'age' => 'required',
            'awards' => 'required',
            'social_media' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'description' => 'required',
            'status' => 'required|in:active,inactive'

        ]);
        
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioname = time() . '_' . $audio->getClientOriginalName();
            $path = public_path('upload/Artist/');
            $audio->move($path,$audioname);   
        }else{
            $audioname='audio.mp3';
        }

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Artist/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }

        $Artistdetail = new Artist();
        $Artistdetail->artist_name = $request->get('artist_name');
        $Artistdetail->slug = $request->get('slug');
        $Artistdetail->nick_name = $request->get('nick_name');
        $Artistdetail->age = $request->get('age');
        $Artistdetail->awards = $request->get('awards');
        $Artistdetail->social_media = $request->get('social_media');
        $Artistdetail->image = $fileNameToStore;
        $Artistdetail->audio = $audioname;
        $Artistdetail->description = htmlspecialchars($request->get('description'));
        $Artistdetail->status = $request->get('status');
        $status = $Artistdetail->save();

        if($status){
            return redirect()->route('artist.index')->with('success','Artist details created successfully');
        }else{
            return redirect()->route('artist.index')->with('error','Something went wrong');
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
        $ArtistDetail = Artist::findOrFail($id);
        return view('Backend.artist.edit',compact('ArtistDetail'));
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
            'artist_name' => 'required',
            'slug' => 'required',
            'nick_name' => 'required',
            'age' => 'required',
            'awards' => 'required',
            'social_media' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'description' => 'required',
            'status' => 'required|in:active,inactive'

        ]);

        $ArtistDetail = Artist::findOrFail($id);
        
        if($request->hasFile('audio')){
            $oldAudioPath = public_path().'/upload/Artist/'.$ArtistDetail->audio;
            if(\File::exists($oldAudioPath)){
                \File::delete($oldAudioPath);
            }

            $newPath = public_path().'/upload/Artist/';
            $file = $request->file('audio');
            $randomName = $file->hashName();
            $filenameForAudio = 'UpdatedAudioTwo_'.$randomName;
            $file->move($newPath,$filenameForAudio);
        }else{
            $filenameForAudio = $ArtistDetail->audio;
        }


        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/Artist/'.$ArtistDetail->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/Artist/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $ArtistDetail->image;
        }

       
        $ArtistDetail->artist_name = $request->get('artist_name');
        $ArtistDetail->slug = $request->get('slug');
        $ArtistDetail->nick_name = $request->get('nick_name');
        $ArtistDetail->age = $request->get('age');
        $ArtistDetail->awards = $request->get('awards');
        $ArtistDetail->social_media = $request->get('social_media');
        $ArtistDetail->image = $fileNameToStoreImage;
        $ArtistDetail->audio = $filenameForAudio;
        $ArtistDetail->description = htmlspecialchars($request->get('description'));
        $ArtistDetail->status = $request->get('status');
        $status = $ArtistDetail->save();


        if($status){
            return redirect()->route('artist.index')->with('success','Artist Detail updated successfully');
        }else{
            return redirect()->route('artist.index')->with('error','Something went wrong!Please try again later');
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
        $ArtistDetail = Artist::findOrFail($id);
        $BannerPath = public_path().'/upload/Artist/'.$ArtistDetail->banner_image;
        $ImagePath = public_path().'/upload/Artist/'.$ArtistDetail->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }

        $status = $ArtistDetail->delete();
        if($status){
            return redirect()->route('artist.index')->with('success','Artist details deleted successfully');
        }else{
            return redirect()->route('artist.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
