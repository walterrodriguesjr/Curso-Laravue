<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
/* 4 */

class UserController extends Controller
{
    public function index()
    {
        dd('x');
    }

    /* 4.1 e 4.2 e 4.3 */
    public function show(Request $request, User $user)
    {
        return($user);
        dd($user);
        /* dd($request->method()); */
        /* dd('show', $id); */
    }
}
