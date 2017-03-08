<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Message;
use App\Destination;
use App\Adventure;
use App\User;
use App\Page;
use Storage;
use App\Gallery_url;
class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        $messages=Message::all();
        $adventures=Adventure::all();
        $destinations=Destination::all();
        $users=User::all();
        $banners=Page::all();

        return view('owner.dashboard',[
            'messages'=>$messages,
            'adventures'=>$adventures,
            'destinations'=>$destinations,
            'users'=>$users,
            'banners'=>$banners
        ]);
    }
    public function adventures(){
        $adventures=Adventure::all();
        return view('owner.adventures',['adventures'=>$adventures]);
    }
      public function users(){
        $users=User::all();
        return view('owner.users',['users'=>$users]);
    }
         public function addUrl(){
        return view('owner.addUrl');
    }
       public function postUrl(Request $request){
        $this->validate($request, [
            'url_link'=>'required|url',
        ]);
        $url= new Gallery_url();
   
            $url->url_link = $request->url_link;
            $url->save();
    
        return redirect()->back()->with('success','URL Successfully Saved.');
    }
     public function updateUrl(Request $request,$id){
        $this->validate($request, [
            'url_link'=>'required|url',
        ]);
        $url=Gallery_url::find($id);
   
            $url->url_link = $request->url_link;
            $url->save();
    
        return redirect()->route('getUrls')->with('success','URL updated');
    }
      public function getUrls(){
        $urls=Gallery_url::all();
        return view('owner.getUrls',['urls'=>$urls]);
    }
       public function editUrl($id){
        $urls=Gallery_url::find($id);
        return view('owner.editUrl',['urls'=>$urls]);
    }
      public function deleteUser($id){
        $delete=User::where('id',$id)->first();
        $delete->delete();
        return redirect()->route('User')->with('success','User Deleted Successfully!');
    }
    public function addAdventure(){
        return view('owner.addAdventure');
    }
    public function postAdventure(Request $request){
        $this->validate($request, [
            'a_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7168',
            'title'=>'required',
            'description'=>'required',
            'other_details'=>'required',
        ]);
        $adventures = new Adventure();
        if($request->hasFile('a_image')){
            $image=$request->file('a_image');
            $imageName= time().'.'.$image->getClientOriginalExtension();
            $request->a_image->move('../adventuroustravelers.helavest.com/uploads/adventures/', $imageName);
            $adventures->a_image = $imageName;
            $adventures->title = $request->title;
            $adventures->description = $request->description;
            $adventures->other_details = $request->other_details;
            $adventures->save();
        }
        return redirect()->back()->with('success','Adventure details Successfully Saved.');
    }
    public function deleteAdventure($id){
        $delete=Adventure::where('id',$id)->first();
        $delete->delete();
        return redirect()->route('Adventure')->with('success','Adventure Deleted Successfully!');
    }
    public function editAdventure($id){
        $adventures=Adventure::find($id);
        return view('owner.editAdventure',['adventures'=>$adventures]);
    }
    public function updateAdventure(Request $request,$id){
        $adventures = Adventure::find($id);
       
        if($request->hasFile('a_image')) {
            $image=$request->file('a_image');
            $imageName= time().'.'.$image->getClientOriginalExtension();
            $request->a_image->move('../adventuroustravelers.helavest.com/uploads/adventures/', $imageName);
            $oldimage=$adventures->a_image;
            $adventures->a_image=$imageName;
            Storage::delete($oldimage);
          
        }
          $adventures->title = $request->title;
            $adventures->description = $request->description;
            $adventures->other_details = $request->other_details;
            $adventures->save();
        return redirect()->route('Adventure')->with('success','Adventure details updated Successfully.');
    }

    public function messages(){
        $messages=Message::all();
        return view('owner.messages',['messages'=>$messages]);
    }
      public function banners(){
        $banners=Page::all();
        return view('owner.banners',['banners'=>$banners]);
    }
    public function deleteMessage($id){
        $delete=Message::where('id',$id)->first();
        $delete->delete();
        return redirect()->route('Message')->with('success','Message Deleted Successfully!');
    }
    public function destinations(){
        $destinations=Destination::all();
        return view('owner.destinations',['destinations'=>$destinations]);
    }
    public function addDestination(){
        return view('owner.addDestination');
    }
     public function addbanner(){
        return view('owner.addbanner');
    }
    public function postDestination(Request $request){
        $this->validate($request, [
            'd_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7168',
            'name'=>'required',
            'description'=>'required',
            'other_details'=>'required',
        ]);
       $destinations = new Destination();
        if($request->hasFile('d_image')) {
            $image=$request->file('d_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->d_image->move('../adventuroustravelers.helavest.com/uploads/destinations/', $imageName);
            $destinations->d_image = $imageName;
            $destinations->name = $request->name;
            $destinations->description = $request->description;
            $destinations->other_details = $request->other_details;
            $destinations->save();
        }
        return redirect()->back()->with('success','Destination Successfully Created.');
    }
    public function deleteDestination($id){
        $delete=Destination::where('id',$id)->first();
        $delete->delete();
        return redirect()->route('Destination')->with('success','Destination Deleted Successfully!');
    }
    public function editDestination($id){
        $destinations=Destination::find($id);
       return view('owner.editDestination',['destinations'=>$destinations]);
    }
    public function updateDestination(Request $request,$id){
        $destinations =Destination::find($id);
        if($request->hasFile('d_image')) {
            $image=$request->file('d_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->d_image->move('../adventuroustravelers.helavest.com/uploads/destinations/', $imageName);
            $oldimage=$destinations->d_image;
            Storage::delete($oldimage);
            $destinations->d_image = $imageName;
        }
            $destinations->name = $request->name;
            $destinations->description = $request->description;
            $destinations->other_details = $request->other_details;
            $destinations->save();
        return redirect()->route('Destination')->with('success','Destination details updated Successfully.');
    }
       public function postBanner(Request $request){
        $this->validate($request, [
            'page_name'=>'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7168',
        ]);
       $page= new Page();
        if($request->hasFile('photo')) {
            $image=$request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->photo->move('../adventuroustravelers.helavest.com/banners', $imageName);
            $page->page_name=$request->page_name;
            $page->photo=$imageName;
            $page->save();
        }
        return redirect()->back()->with('success','Banner Successfully Created.');
    }
        public function editBanner($id){
            $banners=Page::find($id);
        return view('owner.editbanner',['banners'=>$banners]);
    }
    public function updateBanner(Request $request,$id){
       $this->validate($request, [
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:716800',
        ]);
       $page= Page::find($id);
        if($request->hasFile('photo')) {
            $image=$request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->photo->move('../adventuroustravelers.helavest.com/banners', $imageName);
            $page->photo=$imageName;
         }
            $page->save();
        return redirect()->route('banners')->with('success','Banner details updated.');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
