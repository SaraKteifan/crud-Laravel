<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Father;


class FatherController extends Controller
{
    public function show(){
        return Father::find(2)->children;
    }
}
