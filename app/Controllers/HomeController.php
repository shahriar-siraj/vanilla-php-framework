<?php

namespace App\Controllers;

use App\Helpers\Params;
use App\Helpers\View;
use App\Models\User;

class HomeController
{
    public function index()
    {
        // $users = User::getAll();

        $users = array(
            (object) [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'age' => 29,
                'country' => 'USA'
            ],
            (object) [
                'first_name' => 'Mary',
                'last_name' => 'Moe',
                'email' => 'mary@example.com',
                'age' => 32,
                'country' => 'UK'
            ],
            (object) [
                'first_name' => 'Erik',
                'last_name' => 'Nilsson',
                'email' => 'erik@example.com',
                'age' => 20,
                'country' => 'Sweden'
            ],
            (object) [
                'first_name' => 'Joe',
                'last_name' => 'Martenson',
                'email' => 'joe@example.com',
                'age' => 35,
                'country' => 'Norway'
            ],
            (object) [
                'first_name' => 'Steve',
                'last_name' => 'Carrel',
                'email' => 'steve@example.com',
                'age' => 25,
                'country' => 'Australia'
            ]
        );

        return View::render('home/welcome.php', [
            'users' => $users
        ]);
    }

    public function get_user()
    {
        $users = array();
        $users[] = User::find(Params::get('id'));

        return View::render('home/welcome.php', [
            'users' => $users
        ]);
    }

    // public function create_user()
    // {
    //     $user = (object) [
    //         'first_name' => 'Myra',
    //         'last_name' => 'Dalton',
    //         'email' => 'myra@example.com4',
    //         'age' => 21,
    //         'country' => 'Sweden'
    //     ];

    //     User::create($user);
    // }

}