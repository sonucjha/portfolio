<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function saveUserImage(Request $request){
        $about = new About();
        $fileName = time().'.'. $request->file('userImage')->getClientOriginalExtension();
        // $fileName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file('userImage')->move(public_path('upload'), $fileName);
        $about->profile_pic = $fileName;
        $about->save();
        return response()->json(['success'=>'You have successfully upload file.']);
   }
}
