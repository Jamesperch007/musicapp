<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contactdetail = Contact::orderBy('created_at','DESC')->get();
        return view('Backend.contact.view',compact('Contactdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.contact.add');
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'status' => 'required|in:active,inactive'

        ]);


        $Contactdetail = new Contact();
        $Contactdetail->name = $request->get('name');
        $Contactdetail->email = $request->get('email');
        $Contactdetail->subject = $request->get('subject');
        $Contactdetail->message = htmlspecialchars($request->get('message'));
        $Contactdetail->status = $request->get('status');
        $status = $Contactdetail->save();

        if($status){
            return redirect()->route('contact.index')->with('success','contact details created successfully');
        }else{
            return redirect()->route('contact.index')->with('error','Something went wrong');
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
        $Contactdetail = Contact::findOrFail($id);
        return view('Backend.contact.edit',compact('Contactdetail'));
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'status' => 'required|in:active,inactive'

        ]);

        $Contactdetail = Contact::findOrFail($id);

        

       
        $Contactdetail->name = $request->get('name');
        $Contactdetail->email = $request->get('email');
        $Contactdetail->subject = $request->get('subject');
        $Contactdetail->message = htmlspecialchars($request->get('message'));
        $Contactdetail->status = $request->get('status');
        $status = $Contactdetail->save();


        if($status){
            return redirect()->route('contact.index')->with('success','contact Detail updated successfully');
        }else{
            return redirect()->route('contact.index')->with('error','Something went wrong!Please try again later');
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
        $Contactdetail = Contact::findOrFail($id);
       

        $status = $Contactdetail->delete();
        if($status){
            return redirect()->route('contact.index')->with('success','contact details deleted successfully');
        }else{
            return redirect()->route('contact.index')->with('error','Something went wrong!Please try again later');
        }
    }
}
