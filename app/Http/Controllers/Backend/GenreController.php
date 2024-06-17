<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Genredetails = Genre::orderBy('created_at','DESC')->get();
        return view('Backend.genre.view',compact('Genredetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.genre.add');
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
            'title' => 'required',
            'slug' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'description' => 'required|string|max:500',
            'status' => 'required|in:active,inactive'

        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Genre/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }

        $Genredetails = new Genre();
        $Genredetails->title = $request->get('title');
        $Genredetails->slug = $request->get('slug');
        $Genredetails->image = $fileNameToStore;
        $Genredetails->description = htmlspecialchars($request->get('description'));
        $Genredetails->status = $request->get('status');
        $status = $Genredetails->save();

        if($status){
            return redirect()->route('genre.index')->with('success','Genre details created successfully');
        }else{
            return redirect()->route('genre.index')->with('error','Something went wrong');
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
        $Genredetails = Genre::findOrFail($id);
        return view('Backend.genre.edit',compact('Genredetails'));
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
            'title' => 'required',
            'slug' => 'required',
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'description' => 'required|string|max:500',
            'status' => 'required|in:active,inactive'

        ]);

        $Genredetails = Genre::findOrFail($id);

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/Genre/'.$Genredetails->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/Genre/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $Genredetails->image;
        }

       
        $Genredetails->title = $request->get('title');
        $Genredetails->slug = $request->get('slug');
        $Genredetails->image = $fileNameToStoreImage;
        $Genredetails->description = htmlspecialchars($request->get('description'));
        $Genredetails->status = $request->get('status');
        $status = $Genredetails->save();


        if($status){
            return redirect()->route('genre.index')->with('success','Genre Detail updated successfully');
        }else{
            return redirect()->route('genre.index')->with('error','Something went wrong!Please try again later');
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
        $Genredetails = Genre::findOrFail($id);
        $BannerPath = public_path().'/upload/Genre/'.$Genredetails->banner_image;
        $ImagePath = public_path().'/upload/Genre/'.$Genredetails->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }

        $status = $Genredetails->delete();
        if($status){
            return redirect()->route('genre.index')->with('success','Genre details deleted successfully');
        }else{
            return redirect()->route('genre.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
