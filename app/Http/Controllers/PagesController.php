<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Message;
use App\Destination;
use App\Adventure;
use App\Page;
use App\Gallery_url;
use DB;
class PagesController extends Controller
{
    //
    public function Index(){
      $pic=Page::where('page_name', 'index')->first();
        $destinations=Destination::all();
    	return view('index',['destinations'=>$destinations,'pic'=>$pic]);
    }
       public function About(){
        $pic=Page::where('page_name', 'about')->first();
    	return view('about',['pic'=>$pic]);
    }
       public function Destinations(){
        $pic=Page::where('page_name', 'destinations')->first();
           return view('destinations',['pic'=>$pic]);
    }
       public function Adventures(){
        $pic=Page::where('page_name', 'adventures')->first();
           $adventures=Adventure::all();
           return view('adventures',['adventures'=>$adventures,'pic'=>$pic]);
    }
       public function Fitness(){
        $pic=Page::where('page_name', 'fitness')->first();
    	return view('fitness',['pic'=>$pic]);
    }
       public function Gallery(){
        $pic=Page::where('page_name', 'gallery')->first();
        $urls=DB::table('gallery_urls')->first();
    	return view('gallery',['pic'=>$pic,'urls'=>$urls]);
    }
       public function Contact(){
        $pic=Page::where('page_name', 'contact')->first();
    	return view('contact',['pic'=>$pic]);
    }
        public function Home(){
      return view('home');
    }
    public function sendMessage(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required',
            'message'=>'required',
        ]);
   $messages=new Message;
        $messages->name=$request->name;
        $messages->phone=$request->phone;
        $messages->email=$request->email;
        $messages->message=$request->message;
        $messages->save();
        return redirect()->back()->with('success','Message send successfully.');
    }
}
