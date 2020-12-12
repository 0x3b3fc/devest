<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $this->Validate($request,[
           'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }
}
