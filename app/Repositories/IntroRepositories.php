<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $barberRepository;
    protected $customerRepository;

    public function __construct()
    {
        $this->Model = new User();
        // $this->barberRepository = new BarberRepository();
        // $this->customerRepository = new CustomerRepository();

        $this->rules = [
            "phone" => "required",
            "name" => "sometimes",
            "remember_token" => "sometimes"
        ];
    }

    public function callbackSaveOTP($request, $user)
    {
        $user->assignRole($request->user_type);
        if ($request->user_type == 'barber') {
            $this->barberRepository->saveOTP($user);
        } else {
            $this->customerRepository->saveOTP($user);
        }
    }

    public function saveOTP(object $request, $otp)
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

    public function activeUser(object $request)
    {

        // Active user
        $check_user = $this->fetch($request->phone);
        if ($check_user) {
            $check_user->user_status = 1;
            $check_user->save();
            return 'success';
        } else {
           return 'failed';
        }
    }
}
