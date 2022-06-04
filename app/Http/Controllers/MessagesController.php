<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(MessageRequest $request)
    {
        Message::create($request->validated());
        return redirect()->back()->with('status', 'Your message has been received.');
    }

    public function show(Message $message)
    {
        //
    }

    public function edit(Message $message)
    {
        //
    }

    public function update(Request $request, Message $message)
    {
        //
    }

    public function destroy(Message $message)
    {
        //
    }
}
