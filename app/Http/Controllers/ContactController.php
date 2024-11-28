<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        Message::where('status', 'unseen')->update(['status' => 'seen']);

        $unreadCount = Message::where('status', '!=', 'read')->count();

        return view('admin.messages', compact('messages', 'unreadCount'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);

        $message->update(['status' => 'read']);

        return view('admin.message-view', compact('message'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'status' => 'unseen',
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
