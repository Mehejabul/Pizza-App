<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PizzaCrustRequest;
use App\Models\PizzaCrust;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzaCrustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $crusts = PizzaCrust::latest()->get();
       return view('admin.crust.index', compact('crusts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crust.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaCrustRequest $request)
    {
        // dd($request->all());
         if($request->pcrust_publish == 'on'){
            $pcrust_publish = 1;
         }else{
            $pcrust_publish = 0;
         }

        $crust = New PizzaCrust();
        $crust->pcrust_title = $request->pcrust_title;
        $crust->pcrust_price = $request->pcrust_price;
        $crust->pcrust_order = $request->pcrust_order;
        $crust->pcrust_publish = $pcrust_publish;
        $crust->pcrust_slug = uniqid();
        $crust->pcrust_creator = Auth::id();
        $crust->save();
        $notification = array(
            'message' => 'pizza Crust create successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('crust.index')->with($notification);
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
        $crust = PizzaCrust::where('pcrust_slug', $slug)->first();
        return view('admin.crust.edit', compact('crust'));
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
        $crust = PizzaCrust::where('pcrust_slug', $slug )->update([
         'pcrust_title' => $request->pcrust_title,
         'pcrust_price' => $request->pcrust_price,
         'pcrust_order' => $request->pcrust_order,
         'pcrust_editor' => Auth::id(),
        ]);
        $notification = array(
            'message' => 'pizza Crust updated successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('crust.index')->with($notification);
    }

    public function status($slug)
    {
        $status = PizzaCrust::where('pcrust_slug', $slug)->first();
        $status->pcrust_status = $status->pcrust_status =! $status->pcrust_status;
        $status->update();
        $notification = array(
            'message' => 'status update successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('crust.index')->with($notification);
    }
    public function publish( $slug)
      {
        $publish = PizzaCrust::where('pcrust_slug', $slug)->first();
        $publish->pcrust_publish = $publish->pcrust_publish =!  $publish->pcrust_publish;
        $publish->update();
        $notification = Array(
            'message' => 'Crust Publish Successfully',
             'alert-type' => 'success',
        );
        return redirect()->route('crust.index')->with($notification);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destroy = PizzaCrust::where('pcrust_slug', $slug)->first();
        $destroy->delete();
        $notification = array(
            'message' => 'successfully delete pizzaCrust',
            'alert-type' => 'success',
        );
        return redirect()->route('crust.index')->with($notification);
    }
}
