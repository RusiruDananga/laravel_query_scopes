<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //calling to the global scope
        // return User::all();

        // Remove all of the global scopes...
        // return User::withoutGlobalScopes()->get();

        //calling to the local scope
        return $users = User::name()->get();
    }
}
