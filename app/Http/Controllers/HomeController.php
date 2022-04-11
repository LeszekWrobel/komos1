<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
       // $users = User::all();
       // $users = User::find();
        //return $user;
		//return view('create', compact('users'));
       // return view('commissions/create', compact('users'));


        $commissions = Commissions::find();
         return view('home');
    }

     public function create()
    {
       // $commissions = Commissions::find();
      // return User::all();

        //$users = User::find();
        //return $user;
		//return view('create', compact('users'));
        //return ($user->id);

        //return view('commissions/create');
        //return view('commissions/create', compact('user'));
        // return view('commissions/create', compact('users'));
    }
    
}
