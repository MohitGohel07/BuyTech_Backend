<?php

   

namespace App\Http\Controllers\API;

   

use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;

use App\User;

use Illuminate\Support\Facades\Auth;

use Validator;

   

class RegisterController extends BaseController

{
    public function login(Request $request)

    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 

            $user = Auth::user(); 

            $success['token'] =  $user->createToken('MyApp')-> accessToken; 

            $success['name'] =  $user->name;
            $success['id'] =  $user->id;

   

            return $this->sendResponse($success, 'User login successfully.');

        } 

        else{ 

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);

        } 

    }

}