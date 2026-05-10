<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function showUploadForm()
    {
        return view('upload-form');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $filename, 'public');
        return "File uploaded successfully! Path: $path";
    }

}
