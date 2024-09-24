<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{

    public function index($id) {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'name' => $name,
            'age' => $age,
        ];

        $access_token = '123-XYZ';
        $minutes = 60;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        
        //add the return statement with the response method along with $data and status-code and set the cookie stated in the question.
        return response($data, 200)
            ->cookie('access_token', $access_token, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
