<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MessageRequest;
use App\Message;

class MessageController extends Controller
{
    function createMessages(Message $msg, MessageRequest $request){
        $data = [
            'key' => str_random(10),
            'email' => $request->email,
            'content' => $request->message
        ];
        $msg->key = $data['key'];
        $msg->email = $data['email'];
        $msg->message = $data['content'];
        $msg->save();
        Mail::send('emails.link-email', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject("Snap Mail - new message");
        });
        return view('validation-form');
    }

    function getMessages(Message $msg, Request $request){
        $final = $msg->where('key', $request->key)->firstOrFail();
        $data = [
            'email' => $final->email,
            'content' => $final->message,
        ];
        $final->delete();
        return view('emails.template', $data);
    }
}
