<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Introduction;

class IntroController extends Controller
{
    //
    public function saveIntro(Request $request){
         $intro = new Introduction;
         $intro->name = $request->name;
         $intro->position = $request->position;
         $intro->facebook = $request->facebook;
         $intro->twitter = $request->twitter;
         $intro->instagram = $request->instagram;
         $intro->save();
        return $intro;
    }
}
