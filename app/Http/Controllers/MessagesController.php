<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required | min:5',
            'email' => 'required'

        ]);

        // Create A New Message
        $message = new Message;
        $message->name =$request->input('name');
        $message->email =$request->input('email');
        $message->subject =$request->input('subject');
        $message->message =$request->input('message');

        // Save Message
        $message->save();

        // Redirect
        return redirect('/')->with('success', 'Message Sent Successfully');
    }

    public function getMessages() {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
