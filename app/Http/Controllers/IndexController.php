<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class IndexController extends Controller
{
    public function loadHome(){

        $mssg = Message::orderBy('id','desc')->limit(6)->get();


        return view('welcome',['mssg'=> $mssg]);
    }
}
