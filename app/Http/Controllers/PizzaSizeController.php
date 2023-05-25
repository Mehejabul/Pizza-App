<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaSizeRequest;
use App\Models\PizzaSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzaSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = PizzaSize::latest()->get();
        return view('admin.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaSizeRequest $request)
    {
        $size = New PizzaSize();
        $size->psize_title = $request->psize_title;
        $size->psize_price = $request->psize_price;
        $size->psize_order = $request->psize_order;
        $size->psize_slug  = uniqid();
        $size->psize_creator = Auth::id();
        $size->save();
        $notification = array(
            'message' => 'successfuly insert pizza size information',
            'alert-type' => 'success',
        );
        return redirect()->route('size.index')->with($notification);
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
        $size = PizzaSize::where('psize_slug', $slug)->first();
        return view('admin.size.edit', compact('size'));
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
        // dd($request->all());
        $size = PizzaSize::where('psize_slug', $slug)->update([

        'psize_title'=> $request->psize_title,
        'psize_price'=> $request->psize_price,
        'psize_order'=> $request->psize_order,
        'psize_editor'=> Auth::id(),
        ]);
        $notification = array(
            'message' => 'successfuly update',
            'alert-type' => 'success',
        );
        return redirect()->route('size.index')->with($notification);
    }

    public function status($slug)
    {
        $pstatus = PizzaSize::where('psize_slug', $slug)->first();
        $pstatus->psize_status = $pstatus->psize_status != $pstatus->psize_status;
        $pstatus->update();
        $notification = array(
           'message' => 'status update successfuly',
           'alert-type' => 'success',
        );
        return redirect()->route('size.index')->with($notification);
    }
    public function publish($slug)
    {

        $publish = PizzaSize::where('psize_slug', $slug)->first();
        $publish->psize_publish != $publish->psize_publish = $publish->psize_publish;
        $publish->update();
        $notification = array(
             'message' => 'publish update successfully',
             'alert-type' => 'success',
        );
        return redirect()->route('size.index')->with($notification);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destroy = PizzaSize::where('psize_slug', $slug)->first();
        $destroy->delete();
        $notification = array(
            'message' => 'successfully deleted',
            'alert-type' => 'success',
        );
        return redirect()->route('size.index')->with($notification);

    }
}
