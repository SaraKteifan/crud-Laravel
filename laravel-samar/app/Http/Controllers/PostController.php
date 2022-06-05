<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    // public function ViewData(){
        
    // }
    public function home(){
        $post2= post::all();
        return view('home', compact('post2'));
    }
    // public function create(){
    //     return view('create');
    // }
    public function insert(){
        $post= new post();
        $post->title=request('title');
        $post->body=request('body');
        $post->save();
        return redirect('home');
    }

    public function destroy($id){
        $deleteData= post::find($id);
        $deleteData->delete();
        return redirect('home')->with('message','data deleted succefully');
    }

    public function edit($id){
        $info = post::find($id);
        $data=[];
        $data['id']=$info->id;
        $data['title']=$info->title;
        $data['body']=$info->body;
        return view('update', ['data'=>$data]);
    }
    public function update($id){
        $updateData= post::find($id);
        $updateData->title=request('title');
        $updateData->body=request('body');
        $updateData->update();
        return redirect('home')->with('message','data updated succefully');
    }
}

