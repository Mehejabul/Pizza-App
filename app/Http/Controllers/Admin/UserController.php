<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image as Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->city = $request->city;
        $user->country = $request->country;
        $user->post_code = $request->post_code;
        $user->address = $request->address;
        $user->slug = uniqid();
        $user->creator = Auth::id();

        if ($request->hasFile('image')) {
            $usrFolder = public_path('/media/user/');
            if (!is_dir($usrFolder)) {
                File::makeDirectory($usrFolder, 0777, true);
            }
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '-' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/user/' . $image_name);
            $user_img = 'media/user/' . $image_name;
            $user->image = $user_img;
        }

        $user->save();

        $notification = array(
           'message' => 'user create Successfully',
           'alert-type' => 'success'
        );
        return redirect()->route('user.index')->with($notification);

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
    public function edit($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->post_code = $request->post_code;
        $user->address = $request->address;
        $user->editor = Auth::id();

        if ($request->hasFile('image')) {
            if (File::exists('old_image')) {
                File::delete('old_image');
            }
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/user/' . $image_name);
            $user_img = 'media/user/' . $image_name;
            $user->image = $user_img;
        }
        $user->save();
        $notification = array(
            'message' => 'successfully update User!',
            'alert-type' => 'success'
        );
        return redirect()->route('user.index')->with($notification);
    }


    public function status($slug)
    {
        $user = User::where('slug', $slug)->first();
        if (!is_null($user)) {
            if ($user->status == 1) {
                $user->status = 0;
            } else {
                $user->status = 1;
            }
        }
        $user->update();
        $notification = array(
            'message' => 'status update successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($slug)
    {
        $user = User::where('slug', $slug)->first();
        if (File::exists($user->image)) {
            File::delete($user->image);
        }
        $user->delete();
        $notification = array(
            'message' => 'user delete successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.index')->with($notification);
    }
}
