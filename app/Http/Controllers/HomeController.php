<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Ensure the user is authenticated
        $this->middleware('auth');
    }

    /**
     * Show the appropriate dashboard based on the user role.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                return view('admin.dashboard'); // admin dashboard view
            case 'author':
                return view('author.dashboard'); // author dashboard view
            default:
                return view('home'); // default user view
        }
    }
}
