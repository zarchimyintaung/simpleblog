<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post_page(){

        return view('backend.post_page');
    }

    public function add_post(Request $request){

        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;


        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id =  $userid;
        $post->name =   $name;
        $post->usertype=  $usertype;
        $post->post_status = 'active';

        $image = $request->image;

        if($image){
            $imageName =  time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postImage',$imageName);

            $post->image = $imageName;
        }

        $post->save();
        return redirect()->back()->with('message','Add Post Created Successfully!');
    }

    public function show_post(){

        $postData = Post::all();

        return view('backend.show_post',compact('postData'));
    }


    public function delete_post($id){

        $post = Post::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post Deleted Successfully!');
    }

    public function edit_post($id){

        $post = Post::find($id);

        return view('backend.edit_post',compact('post'));
    }

    public function update_post(Request $request,$id){
        $data = Post::find($id);

        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;

        if($image){
            $imageName =  time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postImage',$imageName);

            $data->image = $imageName;
        }

        $data->save();

        return redirect()->back()->with('message','Post Updated Successfully!');

    }

    public function accept_post($id){
        $data = Post::find($id);

        $data->post_status = "active";

        $data->save();

        return redirect()->back()->with('message','Post Status Change to Active');
    }

    public function reject_post($id){
        $data = Post::find($id);

        $data->post_status = "rejected";

        $data->save();

        return redirect()->back()->with('message','Post Status Change to Reject');
    }
}
