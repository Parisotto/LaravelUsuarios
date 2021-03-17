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

    public function storage(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('/');
    }

    public function edit(User $userId){
        return view('editar', [
            'user' => $userId
        ]);
    }

    public function update(Request $request, User $user){
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = $request->password;
        }
        $user->save();

        return redirect('/');
    }

    public function delete(User $user){
        $user->delete();
        return redirect('/');
    }
}


