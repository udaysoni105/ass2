<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

class RegistrationController extends Controller
{
    function showform(){
        return view('registration');
    }
    function signup(Request $request){
        $validate = $request->validate([
            'name' =>['required',new Uppercase],
            'email' =>'required|min:10',
            'password' =>'required',
        ]);
        print_r('Form Validated');
        $input = $request->except('_token');
        return view('registration',['data'=>$input]);
    }
}
