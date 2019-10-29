<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Query Scope para filtrar por nombre
     */
    public function scopeName( $query, $name )
    {

        if ( $name ) {

            return $query->where( 'name', 'LIKE', "%$name%" );

        }

    }

    /**
     * Query Scope para filtrar por email
     */
    public function scopeEmail( $query, $email )
    {

        if ( $email ) {

            return $query->where( 'email', 'LIKE', "%$email%" );

        }

    }

    /**
     * Query Scope para filtrar por bio
     */
    public function scopeBio( $query, $bio )
    {

        if ( $bio ) {

            return $query->where( 'bio', 'LIKE', "%$bio%" );

        }

    }
}
