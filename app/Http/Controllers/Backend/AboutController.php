<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Aboutdetail = About::orderBy('created_at','DESC')->get();
        return view('Backend.about.view',compact('Aboutdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.about.add');
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
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'description' => 'required',
            'status' => 'required|in:active,inactive'

        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/About/';
            $fileNameToStore = 'Image_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }

        $Aboutdetail = new About();
        $Aboutdetail->title = $request->get('title');
        $Aboutdetail->image = $fileNameToStore;
        $Aboutdetail->description = htmlspecialchars($request->get('description'));
        $Aboutdetail->status = $request->get('status');
        $status = $Aboutdetail->save();

        if($status){
            return redirect()->route('about.index')->with('success','about details created successfully');
        }else{
            return redirect()->route('about.index')->with('error','Something went wrong');
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
        $Aboutdetail = About::findOrFail($id);
        return view('Backend.about.edit',compact('Aboutdetail'));
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
            'image'=>'nullable|mimes:jpeg,png,jpg',
            'description' => 'required',
            'status' => 'required|in:active,inactive'

        ]);

        $Aboutdetail = About::findOrFail($id);

        if($request->hasFile('image')){
            $oldImageBannerPath = public_path().'/upload/About/'.$Aboutdetail->image;
            if(\File::exists($oldImageBannerPath)){
                \File::delete($oldImageBannerPath);
            }

            $newPath = public_path().'/upload/About/';
            $file = $request->file('image');
            $randomName = $file->hashName();
            $fileNameToStoreImage = 'UpdatedImageTwo_'.time().rand(1,1000).$randomName;
            $file->move($newPath,$fileNameToStoreImage);
        }else{
            $fileNameToStoreImage = $Aboutdetail->image;
        }

       
        $Aboutdetail->title = $request->get('title');
        $Aboutdetail->image = $fileNameToStoreImage;
        $Aboutdetail->description = htmlspecialchars($request->get('description'));
        $Aboutdetail->status = $request->get('status');
        $status = $Aboutdetail->save();


        if($status){
            return redirect()->route('about.index')->with('success','About Detail updated successfully');
        }else{
            return redirect()->route('about.index')->with('error','Something went wrong!Please try again later');
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
        $Aboutdetail = About::findOrFail($id);
        $BannerPath = public_path().'/upload/About/'.$Aboutdetail->banner_image;
        $ImagePath = public_path().'/upload/About/'.$Aboutdetail->image;
        if(\File::exists($BannerPath)){
            \File::delete($BannerPath);
        }
        if(\File::exists($ImagePath)){
            \File::delete($ImagePath);
        }

        $status = $Aboutdetail->delete();
        if($status){
            return redirect()->route('about.index')->with('success','About details deleted successfully');
        }else{
            return redirect()->route('about.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
