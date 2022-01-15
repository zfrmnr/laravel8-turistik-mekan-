<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Place::where('user_id',Auth::id())->get();
        return view('home.user_place',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $datalist = Category::with('children')->get();
        return  view('home.user_place_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =new Place;
        $data->title= $request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description= $request->input('description');
        $data->status= $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->user_id= Auth::id();
        $data->detail= $request->input('detail');
        $data->country= $request->input('country');
        $data->city= $request->input('city');
        $data->location= $request->input('location');
        $data->image=Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('user_places')->with('success','Place Added Successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place,$id)
    {
        $data=Place::find($id);
        $datalist = Category::with('children')->get();
        return  view('home.user_place_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place,$id)
    {
        $data=Place::find($id);
        $data->title= $request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description= $request->input('description');
        $data->status= $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->user_id= Auth::id();
        $data->detail= $request->input('detail');
        $data->country= $request->input('country');
        $data->city= $request->input('city');
        $data->location= $request->input('location');
        if($request->file('image')!=null){
            $data->image =Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('user_places');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place,$id)
    {
        //DB::table('places')->where('id','=',$id)->delete();
        $data=Place::find($id);
        $data->delete();
        return redirect()->route('user_places');
    }
}
