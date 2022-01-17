<?php

namespace App\Http\Controllers;

use App\Models\Favcart;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FavcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Favcart::where('user_id',Auth::id())->get();
        return view('home.user_favcart',['datalist'=>$datalist]);
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
    public function store(Request $request,$id)
    {
        $check=Favcart::find($id);
        if($check==null){
            return redirect()->back()->with('success','Place already Added to Fav Successfuly');

        }
        else{
            $data =new Favcart;
            $data->place_id=$id;
            $data->user_id= Auth::id();
            $data->save();
            return redirect()->back()->with('success','Place Added to Fav Successfuly');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favcart  $favcart
     * @return \Illuminate\Http\Response
     */
    public function show(Favcart $favcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favcart  $favcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Favcart $favcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favcart  $favcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favcart $favcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favcart  $favcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favcart $favcart,$id)
    {
        $data=Favcart::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted from fav list');
    }
}
