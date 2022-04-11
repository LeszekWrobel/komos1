<?php

namespace App\Http\Controllers;

use App\Models\Commissions;
use Illuminate\Http\Request;

use App\Models\User;

class CommissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commissions = Commissions::all();
        //$commissions = auth()->user()->commissions; //nie dziala
        //return $commissions;
         return view('welcome', compact('commissions'));
         //return view('commissions.index');
          
    }

     public function home()
    {
        $commissions = Commissions::find();
        return $commisions;
         return view('home');
    }

    public function POST()
    {
       // $commissions = Commissions::find();
         return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $commissions = Commissions::find();
      // return User::all();

       // $users = User::find();
        //return $user;
		//return view('create', compact('users'));
        //return ($user->id);

        //return view('commissions/create');
        //return view('commissions/create', compact('user'));
        // return view('commissions/create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return request()->all();
        $commission = new Commissions;
        $commission->title = request('title');
        $commission->description = request('description');
        $commission->image = request('image');
        $commission->user_id = request('user_id');
        //$commission->user_id = $user->id;

       //$commission->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function show(Commissions $commissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    //public function edit(Commissions $commissions)
    public function edit($id)
    {
      //  $commissions = Commissions::findOrFile();
      // return viwe('commissions.edit', compact('commission'))
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commissions $commissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commissions $commissions)
    {
        //
    }
}
