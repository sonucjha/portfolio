<?php

namespace App\Http\Repositories;

use App\Models\IntroModel;
use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $introRepository;

    public function __construct()
    {
        $this->Model = new IntroModel();

        $this->rules = [
            "phone" => "required",
            "name" => "sometimes",
            "remember_token" => "sometimes"
        ];
    }

    public function saveIntro(object $request, $otp)
    {
        $this->validateData($request);

        // Insert into user table
        $check_user = $this->fetch($request->phone);
        if ($check_user) {
            $check_user->remember_token = $otp;
            $check_user->save();
        } else {
            $user_info = [
                "name" => $request->name,
                "phone" => $request->phone,
                "password" => $request->password,
                "remember_token" => $otp,
            ];

            $user = $this->store(
                $user_info,
                callback: function ($user) use ($request) {
                    $this->callbackSaveOTP($request, $user);
                }
            );
        }
    }
}
