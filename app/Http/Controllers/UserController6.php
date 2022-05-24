<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController6 extends Controller
{
    public function index()
    {
        /* 6.2 */

        /* método convencional da passagem de parametro */
        /* return view('user.index', [
            'usuario' => 'Walter',
        ]); */

        /* método com ->with() */
        $users = User::all();
        return view('user.index')->with([
            'users' => $users,
        ]);
    }
}
 