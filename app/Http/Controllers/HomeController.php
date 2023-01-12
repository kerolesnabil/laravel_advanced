<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
     public function form(){
         return view('form');
     }


     public function store(Request $request){

         $this->validate($request,[
             'g-recaptcha-response' => 'required|captcha'
         ]);
         return $request->all();
     }

}
