<?php

namespace App\Http\Controllers;

use App\Interface\UserRegisterInterface;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public $userRegisterService;

    public  function __construct(UserRegisterInterface $userRegisterService)
    {
        $this->userRegisterService = $userRegisterService;

    }
    public function register()
    {
        $registered = $this->userRegisterService->register();
        if($registered){
            return "successfully registered";
        }
    }
}
