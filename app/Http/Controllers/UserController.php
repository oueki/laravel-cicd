<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return [
<<<<<<< HEAD
            'user' => 2,
=======
            'user' => 1,
>>>>>>> fcbe8b9... update controller
            'user_name' => 'Viktor'
        ];
    }
}
