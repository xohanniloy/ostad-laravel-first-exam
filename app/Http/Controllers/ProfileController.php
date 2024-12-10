<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {

    function index( Request $request, $id ) {

        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id'   => $id,
            'name' => $name,
            'age'  => $age
        ];


        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 60;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        return response( 'Cookie Set' )->cookie( $name, $value, $minutes, $path, $domain, $secure, $httpOnly );

    }
}
