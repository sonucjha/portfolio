<?php

namespace App\Http\Repositories;

use App\Models\IntroModel;
use App\Models\User;

class IntroRepository extends BaseRepository
{
    public function __construct()
    {
        $this->Model = new IntroModel();

        $this->rules = [
            "name" => "required",
            "position" => "required",
            "social" => "required"
        ];
    }

    public function saveIntro(object $request)
    {
        $check = $this->fetch();
        if ($check) {
            return 'delete old  intro first';
        } else {
            $this->validateData($request);

            // Insert into info table
            $user_info = [
                "name" => $request->name,
                "position" => $request->position,
                "social" => $request->social
            ];

            $this->store($user_info);
        }
    }

    public function editIntro(Object $request){
        $user_info = $this->fetch();
        $user_info->name = $request->name;
        $user_info->position = $request->position;
        $user_info->social = $request->social;
        $user_info->save();
    }

    public function deleteIntro(){
        $this->delete();
    }
}
