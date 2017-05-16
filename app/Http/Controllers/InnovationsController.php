<?php

namespace App\Http\Controllers;

use App\Innovation;

class InnovationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $innovations = Innovation::all();

        // return $innovations;

    return view('halloffame', compact('innovations'));    
      }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $innovation = new Innovation;

        // dd(request()->all());

        $innovation->name = request('NAME');
        $innovation->team = request('TEAM');
        $innovation->team_members = request('TEAM_MEMBERS');
        $innovation->email = request('EMAIL');
        $innovation->title = request('TITLE');
        $innovation->description = request('DESCRIPTION');
        $innovation->submitter = request('SUBMITTER');

        $innovation->save();

        return redirect('/');

    }

    
}
