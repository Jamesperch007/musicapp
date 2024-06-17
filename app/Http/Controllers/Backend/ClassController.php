<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Classetails = Classes::orderBy('created_at','DESC')->get();
        return view('Backend.Class.view',compact('Classetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Class.create');
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
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'banner_image'=>'nullable|image|mimes:jpeg,png,jpg',
            'image_icon'=>'nullable|image|mimes:jpeg,png,jpg,svg',
            'status' => 'required|in:active,inactive'

        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Classes/';
            $fileNameToStore = 'Service_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }


        if($request->hasFile('banner_image')){
            $file = $request->file('banner_image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Classes/';
            $fileNameForBanner = 'Banner_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameForBanner);
        }else{
            $fileNameForBanner = 'noimg.jpg';
        }

        if($request->hasFile('image_icon')){
            $file = $request->file('image_icon');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/upload/Classes/';
            $fileNameForImageIcon = 'Icon_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameForImageIcon);
        }else{
            $fileNameForImageIcon = 'noimg.jpg';
        }

        $Classetails = new Classes();
        $Classetails->title = $request->get('title');
        $Classetails->slug = \Str::slug($request->get('title'));
        $Classetails->meta_keyword = htmlspecialchars($request->get('meta_keyword'));
        $Classetails->description = htmlspecialchars($request->get('description'));
        $Classetails->status = $request->get('status');
        $Classetails->image = $fileNameToStore;
        $Classetails->banner_image = $fileNameForBanner;
        $Classetails->image_icon = $fileNameForImageIcon;
        $status = $Classetails->save();

        if($status){
            return redirect()->route('class.index')->with('success','class created successfully');
        }else{
            return redirect()->route('class.index')->with('error','Something went wrong!Please try again later');
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
        $Classetails = Classes::findOrFail($id);
        return view('Backend.Class.edit',compact('Classetails'));
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
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'banner_image'=>'nullable|image|mimes:jpeg,png,jpg',
            'image_icon'=>'nullable|image|mimes:jpeg,png,jpg,svg',
            'status' => 'required|in:active,inactive'

        ]);
        $Classetails = Classes::findOrFail($id);
        if($request->hasFile('image')){
            if(\File::exists(public_path().'/upload/Classes/'.$Classetails->image)){
                \File::delete(public_path().'/upload/Classes/'.$Classetails->image);
            }

            $path = public_path().'/upload/Classes/';
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $fileNameToStore = 'UpdatedService_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = $Classetails->image;
        }

        //banner_image

        if($request->hasFile('banner_image')){
            if(\File::exists(public_path().'/upload/Classes/'.$Classetails->banner_image)){
                \File::delete(public_path().'/upload/Classes/'.$Classetails->banner_image);
            }

            $path = public_path().'/upload/Classes/';
            $file = $request->file('banner_image');
            $fileName = $file->getClientOriginalName();
            $fileNameForBanner = 'UpdatedBanner_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameForBanner);
        }else{
            $fileNameForBanner = $Classetails->banner_image;
        }

        if($request->hasFile('image_icon')){
            if(\File::exists(public_path().'/upload/Classes/'.$Classetails->image_icon)){
                \File::delete(public_path().'/upload/Classes/'.$Classetails->image_icon);
            }

            $path = public_path().'/upload/Classes/';
            $file = $request->file('image_icon');
            $fileName = $file->getClientOriginalName();
            $fileNameForImageIcon = 'UpdatedIcon_'.time().rand(1,1000).$fileName;
            $file->move($path,$fileNameForImageIcon);
        }else{
            $fileNameForImageIcon = $Classetails->image_icon;
        }


        $Classetails->title = $request->get('title');
        $Classetails->slug = \Str::slug($request->get('title'));
        $Classetails->meta_keyword = htmlspecialchars($request->get('meta_keyword'));
        $Classetails->description = htmlspecialchars($request->get('description'));
        $Classetails->status = $request->get('status');
        $Classetails->image = $fileNameToStore;
        $Classetails->banner_image = $fileNameForBanner;
        $Classetails->image_icon = $fileNameForImageIcon;
        $status = $Classetails->save();
        if($status){
            return redirect()->route('class.index')->with('success','Class  updated successfully');
        }else{
            return redirect()->route('class.index')->with('error','Something went wrong!Please try again later');
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
        $Classetails = Classes::findOrFail($id);
        $path = public_path().'/upload/Classes/'.$Classetails->image;
        $path1 = public_path().'/upload/Classes/'.$Classetails->banner_image;
        $path2 = public_path().'/upload/Classes/'.$Classetails->image_icon;
        if(\File::exists($path)){
            \File::delete($path);
        }
        if(\File::exists($path1)){
            \File::delete($path1);
        }
        if(\File::exists($path2)){
            \File::delete($path2);
        }
        $status = Classes::where('id',$id)->delete();
        if($status){
            return redirect()->route('class.index')->with('success','Class deleted successfully');
        }else{
            return redirect()->route('class.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
