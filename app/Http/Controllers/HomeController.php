<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('home');
    }

    public function documentation()
    {
        return view('page',
            ['page' => 'documentation']);
    }

    public function support()
    {
        return view('page',
            ['page' => 'support']);
    }

}
