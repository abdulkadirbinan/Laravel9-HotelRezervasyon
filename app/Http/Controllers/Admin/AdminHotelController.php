<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHotelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Hotel::all();
     return  view('admin.hotel.index',[

         'data' => $data
     ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Category::all();
        return  view('admin.hotel.create',[

            'data' => $data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data= new Hotel();
        $data->category_id =$request->category_id;
        $data->user_id =0; //$request->user_id;
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->detail =$request->detail;
        $data->star =$request->star;
        $data->address =$request->address;
        $data->phone =$request->phone;
        $data->fax =$request->fax;
        $data->email =$request->email;
        $data->city =$request->city;
        $data->country =$request->country;
        $data->location =$request->location;
        $data->status =$request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('public/images');
        }
       $data->save();
       return redirect('admin/hotel');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel,$id)
    {
        $data= Hotel::find($id);
        return  view('admin.hotel.show',[

            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel,$id)
    {
        $data= Hotel::find($id);
        $datalist= Category::all();
        return  view('admin.hotel.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel,$id)
    {
        $data= Hotel::find($id);
        $data->category_id =$request->category_id;
        $data->user_id =0; //$request->user_id;
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->detail =$request->detail;
        $data->star =$request->star;
        $data->address =$request->address;
        $data->phone =$request->phone;
        $data->fax =$request->fax;
        $data->email =$request->email;
        $data->city =$request->city;
        $data->country =$request->country;
        $data->location =$request->location;
        $data->status =$request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('public/images');
        }
        $data->save();
        return redirect('admin/hotel');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel,$id)
    {
        $data= Hotel::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/hotel');
    }
}
