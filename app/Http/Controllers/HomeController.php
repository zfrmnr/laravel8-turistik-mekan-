<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Place;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Context;

class HomeController extends Controller
{

    public static function categorylist()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }
    public static function countreview($id)
    {
        return Review::where('place_id', $id)->count();
    }
    public static function avrgreview($id)
    {
        return Review::where('place_id', $id)->average('rate');
    }

    public function index()
    {
        $setting =Setting::first();
        $slider =Place::select('id','title','image','city')->limit(4)->get();
        $popular =Place::select('id','title','image','city')->limit(4)->inRandomOrder()->get();
        $mostlike =Place::select('id','title','image','city')->limit(4)->orderByDesc('id')->get();
        $mustseem =Place::select('id','title','image','city')->limit(4)->inRandomOrder()->get();

        $data = [
          'setting'=>$setting,
          'slider'=>$slider,
            'popular'=>$popular,
            'mostlike'=>$mostlike,
            'mustseem'=>$mustseem,
            'page'=>'home'

        ];


        return view('home.index',$data);
    }


    public function place($id){
        $data =Place::find($id);
        $datalist = Image::where('place_id',$id)->get();
        $reviews = Review::where('place_id',$id)->get();
        return view('home.places_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }


    public function getplace(Request  $request)
    {
        $search=$request->input('search');

        $count=$data =Place::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1){
            $data =Place::where('title', 'like','%'.$search.'%')->first();
            return redirect()->route('place',['id'=>$data->id]);
        }
        else{
            return redirect()->route('placelist',['search'=>$search]);
        }


    }

    public function placelist($search)
    {
            $datalist =Place::where('title', 'like','%'.$search.'%')->get();
        return view('home.search_places',['search'=>$search,'datalist'=>$datalist]);

    }


    public function addtofav($id){
        $data =Place::find($id);
    }

    public function categoryplaces($id){
        $datalist =Place::where('category_id',$id)->get();
        $data =Category::find($id);
        return view('home.category_places',['data'=>$data,'datalist'=>$datalist]);


    }


    public function aboutus(){
        $setting =Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references(){
        $setting =Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function faq(){
        return view('home.about');
    }


    public function contact(){
        $setting =Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){
        $data=new Message();
        $data->name= $request->input('name');
        $data->email=$request->input('email');
        $data->phone= $request->input('phone');
        $data->subject= $request->input('subject');
        $data->message= $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success','mesajınız kaydedildi!');
    }




    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');


            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request  $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }


}
