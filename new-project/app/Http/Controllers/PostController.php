<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB; //


class PostController extends Controller
{
    public function index(){
    $info = DB::select('select * from posts');
    return view('edit',['info'=>$info]);
    }

    public function show($id) {
    $info = DB::select('select * from posts where id = ?',[$id]);
    return view('update',['info'=>$info]);
    }

    public function edit(Request $request,$id) {
    $title = $request->input('title');
    $body = $request->input('body');

    DB::update('update posts set title = ?,body=? where id = ?',[$title,$body,$id]);
    echo "Record updated successfully.";
    echo 'Click Here to go <a href="/edit-records">back</a>.';
    }
    
}

    