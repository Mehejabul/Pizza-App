<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\WebsteContact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      return view('forntend.website.home');
    }

    public function contact(){
        return view('forntend.pages.contact.contact');
    }

    public function contact_submit(Request $request){
       $this->validate($request,[
           'first_name' => 'required',
           'last_name' => 'required',
       ],[
        'first_name.required' => 'Please enter Your first name',
        'last_name.required' => 'Please enter Your last name',
       ]);

       $insert =  WebsteContact::create([
         'first_name' => $request->first_name,
         'last_name' => $request->last_name,
         'subject' => $request->subject,
         'message' => $request->message,
         'created_at' => Carbon::now(),
       ]);
       if($insert){
        Session::flash('success', "Thank You, we will replay you soon");
       }else{
        session::flash('error', 'OPPs! something worng');
       }

       return redirect()->back();
    }
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
        //
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
        //
    }
}
