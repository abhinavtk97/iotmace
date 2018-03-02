<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth::user()->id;
        $name = User::where('id',$id)->first();



        $messages = Message::where('user_id',$id)->orderBy('id','desc')->paginate(10);

        return view('home',['id'=>$id, 'user' => $name,'messages' => $messages]);
    }
}
