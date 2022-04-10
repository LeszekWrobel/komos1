<?php

namespace App\Http\Controllers;

use App\Models\Commissions;
use Illuminate\Http\Request;

class CommissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //return view('welcome');
         return view('commissions.index');
    }

     public function home()
    {
        $commissions = Commissions::find();
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
      //  return view('home')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
