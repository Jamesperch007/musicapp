<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Register;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Registerdetail = Register::orderBy('created_at','DESC')->get();
        return view('Backend.register.view',compact('Registerdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'full_name' => 'required',
            'email' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'status' => 'required|in:active,inactive'

        ]);


        $Registerdetail = new Register();
        $Registerdetail->full_name = $request->get('full_name');
        $Registerdetail->email = $request->get('email');
        $Registerdetail->user_name = $request->get('user_name');
        $Registerdetail->password = $request->get('password');
        $Registerdetail->status = $request->get('status');
        $status = $Registerdetail->save();

        if($status){
            return redirect()->route('register.index')->with('success','register details created successfully');
        }else{
            return redirect()->route('register.index')->with('error','Something went wrong');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Registerdetail = Register::findOrFail($id);
       

        $status = $Registerdetail->delete();
        if($status){
            return redirect()->route('register.index')->with('success','register details deleted successfully');
        }else{
            return redirect()->route('register.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
