<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class UserController extends Controller
{
    public function store()
    {
        try {
            $user = new User();

            $user->name = 'default';
            $user->email = request('email');
            $user->password = 'default';

            $user->save();

            return redirect('/');

        } catch (Exception $e) {
            return redirct('/');

        }




    }

}
