<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BasicSetting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

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

   public function basic_index()
   {

    $basicsetting = BasicSetting::first();
    return view('admin.setting.basic.index',compact('basicsetting'));

   }

   public function basic_update(Request $request){

        //logo
        if ($request->hasFile('bs_logo')) {
            if (File::exists($request->old_bs_logo)) {
                File::delete($request->bold_bs_logos);
            }

            $image = $request->file('bs_logo');
            $imageName = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/' . $imageName);
            $bs_logo = 'media/setting/'. $imageName;
        }else{
            $bs_logo = $request->old_bs_logo;
        }


        //bs_favicon
        if($request->hasFile('bs_fabicon')){
            if(File::exists($request->old_bs_fabicon)){
                File::delete($request->old_bs_fabicon);
            }
            $image = $request->file('bs_fabicon');
            $ImageName = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/'. $ImageName);
            $bs_fabicon = 'media/setting/' . $ImageName;
        }else{
            $bs_fabicon = $request->old_bs_fabicon;
        }


        //bs_footer_logo
        if ($request->hasFile('bs_flogo')) {
            if (File::exists($request->old_bs_flogo)) {
                File::delete($request->old_bs_flogo);
            }
            $image = $request->file('bs_flogo');
            $ImageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/' . $ImageName);
            $bs_flogo = 'media/setting/' . $ImageName;
        } else {
            $bs_flogo = $request->old_bs_flogo;
        }


    $basicsetting = BasicSetting::where('bs_id', 1)->update([
      'bs_company' => $request->bs_company,
      'bs_url' => $request->bs_url,
      'bs_title' => $request->bs_title,
      'bs_logo' => $bs_logo,
      'bs_flogo' => $bs_flogo,
      'bs_fabicon' => $bs_fabicon,
    ]);

    $notification = array(
     'message' => "successfully updated",
     'alert-type' => 'success',
    );
    return redirect()->back()->with($notification);


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
