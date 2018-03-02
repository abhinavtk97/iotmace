<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;
use App\User;

class MessageController extends Controller
{



    public function loadBlog(){


        $messages = Message::orderBy('id','desc')->paginate(6);

        return view('blog',['messages' => $messages]);
    }

    public function loadPost($id){


        $message = Message::where('id',$id)->first();
        $max = Message::max('id');
        $messages = Message::orderBy('id','desc')->get();

        if($id==1){
            $next = Message::where('id',$id+1)->first();


            return view('post',['message' => $message,'messages'=>$messages,'next'=>$next]);
        }
        else if($max==$id){
            $prev = Message::where('id',$id-1)->first();

            return view('post',['message' => $message,'messages'=>$messages,'prev'=>$prev]);

        }
        $prev = Message::where('id',$id-1)->first();
        $next = Message::where('id',$id+1)->first();



        return view('post',['message' => $message,'messages'=>$messages,'next'=>$next,'prev'=>$prev]);
    }
}
