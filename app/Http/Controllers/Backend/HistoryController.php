<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Historydetail = History::orderBy('created_at','DESC')->get();
        return view('Backend.history.view',compact('Historydetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.history.add');
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
            'user_name' => 'required',
            'song_name' => 'required',
            'genre' => 'required',
            'artist_name' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'status' => 'required|in:active,inactive'

        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/History/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }

        $Historydetail = new History();
        $Historydetail->user_name = $request->get('user_name');
        $Historydetail->song_name = $request->get('song_name');
        $Historydetail->genre = $request->get('genre');
        $Historydetail->artist_name = $request->get('artist_name');
        $Historydetail->image = $fileNameToStore;
        $Historydetail->status = $request->get('status');
        $status = $Historydetail->save();

        if($status){
            return redirect()->route('history.index')->with('success','history details created successfully');
        }else{
            return redirect()->route('history.index')->with('error','Something went wrong');
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
        $Historydetail = History::findOrFail($id);
        return view('Backend.history.edit',compact('Historydetail'));
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
            'user_name' => 'required',
            'song_name' => 'required',
            'genre' => 'required',
            'artist_name' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'status' => 'required|in:active,inactive'

        ]);

        $Historydetail = History::findOrFail($id);

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/History/'.$Historydetail->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/History/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $Historydetail->image;
        }

       
        $Historydetail->user_name = $request->get('user_name');
        $Historydetail->song_name = $request->get('song_name');
        $Historydetail->genre = $request->get('genre');
        $Historydetail->artist_name = $request->get('artist_name');
        $Historydetail->image = $fileNameToStoreImage;
        $Historydetail->status = $request->get('status');
        $status = $Historydetail->save();


        if($status){
            return redirect()->route('history.index')->with('success','history Detail updated successfully');
        }else{
            return redirect()->route('history.index')->with('error','Something went wrong!Please try again later');
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
        $Historydetail = History::findOrFail($id);
        $BannerPath = public_path().'/upload/History/'.$Historydetail->banner_image;
        $ImagePath = public_path().'/upload/History/'.$Historydetail->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }

        $status = $Historydetail->delete();
        if($status){
            return redirect()->route('history.index')->with('success','history details deleted successfully');
        }else{
            return redirect()->route('history.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
