<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Rules\UseValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Closure;


class UserController extends Controller
{
    public function addUser(Request $req){
        // $validate = $req->validate([
        //     'username'=>['required',function(string $attribute, mixed $value, Closure $fail){
        //         if(strtoupper('username') !==$value){
        //             $fail('The :attribute must be uppercase.');
        //         }
        //     }],
        // ]);

        $validate = $req->validate([
            'username'=>['required',new UseValidate],
        ]);
        
        return $req->all();
        
    }
}
