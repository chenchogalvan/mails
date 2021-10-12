<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use App\Mail\itzam\UserPassword;

class ItzamController extends Controller
{



    public function email(Request $request)
    {

        // return $request->all();
        $password = $request->password;
        $send = Mail::to($request->correo)->send(new UserPassword($password));
        return 'success';


    }
}
