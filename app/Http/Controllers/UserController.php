<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importado
use App\User;

class UserController extends Controller
{
    /**
     * Listado de usuarios
    */
    public function index( Request $request )
    {

        $users = User::orderBy( 'id', 'DESC' )->paginate( 4 );

        return view( 'users', compact( 'users' ) ); 

    }
}
