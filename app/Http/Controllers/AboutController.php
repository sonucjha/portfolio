<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function saveUserImage(Request $request){
        $about = new About();
        $fileName = time().'_'.$request->file('userImage')->getClientOriginalName();
        $filePath = $request->file('userImage')->storeAs('uploads', $fileName, 'public');
        $about->profile_pic = time().'_'.$request->file('userImage')->getClientOriginalName();
        $about->file_path = '/storage/profile_pic' . $filePath;
        $about->save();
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $fileName);
        // $about = new About();
        // $fileName = time().'.'. $request->file('userImage')->getClientOriginalExtension();
        // $request->file('userImage')->move(public_path('upload'), $fileName);
        // $about->profile_pic = $fileName;
        // $about->save();
        // return response()->json(['success'=>'You have successfully upload file.']);
   }
}