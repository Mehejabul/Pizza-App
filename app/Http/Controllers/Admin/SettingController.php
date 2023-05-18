<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sm_index()
    {
        $socialmedia = SocialMedia::first();
         return view('admin.setting.social.index', compact('socialmedia'));
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
    public function sm_update(Request $request)
    {
        $socialmediaupdate = SocialMedia::where('sm_id', 1)->update([
            'sm_facebook' => $request-> sm_facebook,
            'sm_twitter' => $request-> sm_twitter,
            'sm_youtube' => $request-> sm_youtube,
            'sm_instagram' => $request-> sm_instagram,
            'sm_linkedin' => $request-> sm_linkedin,
            'sm_pinterest' => $request-> sm_pinterest,
        ]);
        $notification = array(
            'message' => 'successfully update Social media',
            'alert_type' => 'success'
        );
        return redirect()->back()->with($notification);
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
