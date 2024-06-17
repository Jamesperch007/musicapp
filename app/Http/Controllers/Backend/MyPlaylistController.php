<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\MyPlaylist;
use Illuminate\Http\Request;

class MyPlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MyPlaylistdetail = MyPlaylist::orderBy('created_at','DESC')->get();
        return view('Backend.my_playlist.view',compact('MyPlaylistdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.my_playlist.add');
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
            'playlist_name' => 'required',
            'genre' => 'required',
            'created_date' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'status' => 'required|in:active,inactive'

        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/MyPlaylist/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audioname = time() . '_' . $audio->getClientOriginalName();
            $path = public_path('upload/MyPlaylist/');
            $audio->move($path,$audioname);   
        }else{
            $audioname='audio.mp3';
        }
    

        $MyPlaylistdetail = new MyPlaylist();
        $MyPlaylistdetail->playlist_name = $request->get('playlist_name');
        $MyPlaylistdetail->genre = $request->get('genre');
        $MyPlaylistdetail->created_date = $request->get('created_date');
        $MyPlaylistdetail->image = $fileNameToStore;
        $MyPlaylistdetail->audio = $audioname;
        $MyPlaylistdetail->status = $request->get('status');
        $status = $MyPlaylistdetail->save();

        if($status){
            return redirect()->route('my_playlist.index')->with('success','myplaylist details created successfully');
        }else{
            return redirect()->route('my_playlist.index')->with('error','Something went wrong');
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
        $MyPlaylistdetail = MyPlaylist::findOrFail($id);
        return view('Backend.my_playlist.edit',compact('MyPlaylistdetail'));
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
            'playlist_name' => 'required',
            'genre' => 'required',
            'created_date' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'audio'=>'nullable|mimes:mpeg,mp3',
            'status' => 'required|in:active,inactive'

        ]);

        $MyPlaylistdetail = MyPlaylist::findOrFail($id);

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/MyPlaylist/'.$MyPlaylistdetail->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/MyPlaylist/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $MyPlaylistdetail->image;
        }

        if($request->hasFile('audio')){
            $oldAudioPath = public_path().'/upload/MyPlaylist/'.$MyPlaylistdetail->audio;
            if(\File::exists($oldAudioPath)){
                \File::delete($oldAudioPath);
            }

            $newPath = public_path().'/upload/MyPlaylist/';
            $file = $request->file('audio');
            $randomName = $file->hashName();
            $filenameForAudio = 'UpdatedAudioTwo_'.$randomName;
            $file->move($newPath,$filenameForAudio);
        }else{
            $filenameForAudio = $MyPlaylistdetail->audio;
        }

       
        $MyPlaylistdetail->playlist_name = $request->get('playlist_name');
        $MyPlaylistdetail->genre = $request->get('genre');
        $MyPlaylistdetail->created_date = $request->get('created_date');
        $MyPlaylistdetail->image = $fileNameToStoreImage;
        $MyPlaylistdetail->audio = $filenameForAudio;
        $MyPlaylistdetail->status = $request->get('status');
        $status = $MyPlaylistdetail->save();


        if($status){
            return redirect()->route('my_playlist.index')->with('success','myplaylist Detail updated successfully');
        }else{
            return redirect()->route('my_playlist.index')->with('error','Something went wrong!Please try again later');
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
        $MyPlaylistdetail = MyPlaylist::findOrFail($id);
        $BannerPath = public_path().'/upload/MyPlaylist/'.$MyPlaylistdetail->banner_image;
        $ImagePath = public_path().'/upload/MyPlaylist/'.$MyPlaylistdetail->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }
        
        $MyPlaylistdetail = MyPlaylist::find($id);

        $status = $MyPlaylistdetail->delete();
        if($status){
            return redirect()->route('my_playlist.index')->with('success','myplaylist details deleted successfully');
        }else{
            return redirect()->route('my_playlist.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
