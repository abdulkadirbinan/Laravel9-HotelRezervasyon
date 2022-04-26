<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($hid)
    {
        $hotel= Hotel::find($hid);
        //$images = Image:: where('hotel_id',$hid);
        $images = DB::table('images')->where('hotel_id',$hid)->get();
        return  view('admin.image.index',[

            'hotel' => $hotel,
            'images' => $images,

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$hid)
    {

        $data= new Image();
        $data->hotel_id =$hid;
        $data->title =$request->title;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('public/images');
        }
        $data->save();
        return redirect()->route('admin.image.index',['hid'=>$hid]);

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
    public function update(Request $request, $id,$hid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$hid)
    {
        $data= Image::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();

        return redirect()->route('admin.image.index',['hid'=>$hid]);
    }
}
