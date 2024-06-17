<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Albumdetail = Album::orderBy('created_at','DESC')->get();
        return view('Backend.album.view',compact('Albumdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.album.add');
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
            'album_name' => 'required',
            'slug' => 'required',
            'artist_name' => 'required',
            'genre' => 'required',
            'release_date' => 'required',
            'language' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3,wav',
            'description' => 'required',
            'status' => 'required|in:active,inactive'

        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Album/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioname = time() . '_' . $audio->getClientOriginalName();
            $path = public_path('upload/Album/');
            $audio->move($path,$audioname);   
        }else{
            $audioname='audio.mp3';
        }
    

        $Albumdetail = new Album();
        $Albumdetail->album_name = $request->get('album_name');
        $Albumdetail->slug = $request->get('slug');
        $Albumdetail->artist_name = $request->get('artist_name');
        $Albumdetail->genre = $request->get('genre');
        $Albumdetail->release_date = $request->get('release_date');
        $Albumdetail->language = $request->get('language');
        $Albumdetail->image = $fileNameToStore;
        $Albumdetail->audio = $audioname;
        $Albumdetail->description = htmlspecialchars($request->get('description'));
        $Albumdetail->status = $request->get('status');
        $status = $Albumdetail->save();

        if($status){
            return redirect()->route('album.index')->with('success','album details created successfully');
        }else{
            return redirect()->route('album.index')->with('error','Something went wrong');
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
        $Albumdetail = Album::findOrFail($id);
        return view('Backend.album.edit',compact('Albumdetail'));
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
            'album_name' => 'required',
            'slug' => 'required',
            'artist_name' => 'required',
            'genre' => 'required',
            'release_date' => 'required',
            'language' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'description' => 'required',
            'status' => 'required|in:active,inactive'

        ]);

        $Albumdetail = Album::findOrFail($id);

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/Album/'.$Albumdetail->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/Album/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $Albumdetail->image;
        }

        if($request->hasFile('audio')){
            $oldAudioPath = public_path().'/upload/Album/'.$Albumdetail->audio;
            if(\File::exists($oldAudioPath)){
                \File::delete($oldAudioPath);
            }

            $newPath = public_path().'/upload/Album/';
            $file = $request->file('audio');
            $randomName = $file->hashName();
            $filenameForAudio = 'UpdatedAudioTwo_'.$randomName;
            $file->move($newPath,$filenameForAudio);
        }else{
            $filenameForAudio = $Albumdetail->audio;
        }

       
        $Albumdetail->album_name = $request->get('album_name');
        $Albumdetail->slug = $request->get('slug');
        $Albumdetail->artist_name = $request->get('artist_name');
        $Albumdetail->genre = $request->get('genre');
        $Albumdetail->release_date = $request->get('release_date');
        $Albumdetail->language = $request->get('language');
        $Albumdetail->image = $fileNameToStoreImage;
        $Albumdetail->audio = $filenameForAudio;
        $Albumdetail->description = htmlspecialchars($request->get('description'));
        $Albumdetail->status = $request->get('status');
        $status = $Albumdetail->save();


        if($status){
            return redirect()->route('album.index')->with('success','album Detail updated successfully');
        }else{
            return redirect()->route('album.index')->with('error','Something went wrong!Please try again later');
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
        $Albumdetail = Album::findOrFail($id);
        $BannerPath = public_path().'/upload/Album/'.$Albumdetail->banner_image;
        $ImagePath = public_path().'/upload/Album/'.$Albumdetail->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }
        
        $Albumdetail = Album::find($id);

        $status = $Albumdetail->delete();
        if($status){
            return redirect()->route('album.index')->with('success','Album details deleted successfully');
        }else{
            return redirect()->route('album.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
