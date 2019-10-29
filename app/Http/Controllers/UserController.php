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

        $name   = $request->get( 'name' );
        $email  = $request->get( 'email' );
        $bio    = $request->get( 'bio' );

        $users = User::orderBy( 'id', 'DESC' )
            ->name( $name )
            ->email( $email )
            ->bio( $bio )
            ->paginate( 4 );
            
        return view( 'users', compact( 'users' ) ); 

    }
}
