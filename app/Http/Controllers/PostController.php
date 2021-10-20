<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\DB;//using DB declare
use App\Models\Post;//using Post Model Declare

class PostController extends Controller
{
   public function index(){
       return view("index");
   }
   public function show(){
       return view("show");
   }
   public function store(StoreRequest $request){
       //return $request->only('email','password');
       //if($request->has('email")){
           //echo "Yes";
       //}
      // $request->validate([
         //  'email'=>'required',
          // 'password'=>'required|min:6'
       //]);
       return $request->all();
   }
   public function detail(){
       return view('detail',['status'=>false,'users'=>['mg mg','aung aung','tun tun']]);
   }

   public function create(){
       //using query builder crud
     //DB::table('posts')->insert([
      //   'title'=>'Second Post',
       //  'description'=>'Second Post Desc'
     //]);
     //$posts=DB::table('posts')->get();
     //foreach($posts as $post){
        // echo $post->title;
    // }
    //$post=DB::table('posts')->where('id',1)->get();
   // return $post;
   //DB::table('posts')->where('id',1)->update([
               //   'title'=>'First Post Title Update',
                 // 'description'=>'First Post Description Update'
   //]); 
   //DB::table('posts')->where('id',1)->delete();

   //using Eloquent crud
   /*Post::create([//using post Post model
     'title'=>'Third Title',
     'description'=>'Thirrd Description Post'
   ]);*/

   /*$posts=Post::all();
   foreach($posts as $post){
       echo $post->title;
   }*/
   /*$post=Post::find(3);
   return $post;*/
   /*Post::find(3)->update([
       'title'=>'Third Post Update',
       'description'=>'Third Post Description'
   ]);*/
  // Post::destroy(3);

  $posts=Post::where('title','Third Title')->first();
  return $posts;

   }
}
