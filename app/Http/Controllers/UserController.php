<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(){
        $usuarios = User::all();
        return view('index', [
            'users' => $usuarios
        ]);
    }
}
