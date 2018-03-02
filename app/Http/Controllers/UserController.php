<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function editMessage($id){

        $message = Message::where('id',$id)->first();

        return view('editpost',['message'=>$message]);


    }


    public function postEditMessage(Request $request){

        $this->validate($request,[

            'header' => 'required',
            'message' => 'required'
        ]);

        Message::findOrFail($request['id'])->update(['header' =>$request['header'],'message'=> $request['message']]);


        return redirect(route('editmessage',['id'=>$request['id'],'saved'=>1]));
    }

    public function newMessage(){

        return view('newpost');
    }

    public function postNewMessage(Request $request){

        $this->validate($request,[
            'header' => 'required',
            'message' => 'required',
            'tags' => 'required'
        ]);

        $id = Auth::user()->id;





        $message = new Message();
        $message->header = $request['header'];
        $message->message = $request['message'];
        $message->user_id= $id;

        $message->save();


        $message->attachTags(explode(',',$request['tags']));


        $message->save();



        return redirect(route('home'));
    }


    public function deleteMessage($id){

        Message::find($id)->delete();

        return redirect(route('home'));

    }
}
