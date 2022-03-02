<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function adminLogin(Request $request)
    {
        // $name = $request->input('name');
        $input = $request->all();
        perint_r($input);
    }
}
