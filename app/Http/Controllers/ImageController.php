<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;

class ImageController extends Controller
{
    public function index()
    {
        $images = File::allFiles(public_path('web_img'));

        return view('admin.image-uploader', compact('images'));
    }

    // Handle image upload
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = Str::random(10) . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('web_img'), $imageName);

            return redirect()->route('image.uploader')->with('success', 'Image uploaded successfully.');
        }

        return back()->withErrors(['image' => 'Image upload failed.']);
    }
}
