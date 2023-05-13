<?php

namespace App\Http\Controllers;

use App\Events\MessageDeleted;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return [
            'status' => 'Message Sent!',
            'message' => $message
        ];
    }

    public function deleteMessage(Request $request)
    {

        if(Auth::user()->id != $request->input('message')['user']['id']){
            return ['status' => 'You are not authorized to delete this message!'];
        }


        $message = Message::findOrFail($request->input('message')['id']);
        if($message){
            broadcast(new MessageDeleted($message))->toOthers();
            $message->delete();

            return ['status' => 'Message Deleted!'];

        }



        return ['status' => 'nothing to delete'];


    }
}
