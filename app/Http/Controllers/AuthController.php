<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return[
            "nis" => 3103118027,
            "name" => "Aryo Priyadi",
            "gender" => "Laki-laki",
            "phone" => 6282125298790,
            "class" => "XII RPL 1"
        ];
    }
}
