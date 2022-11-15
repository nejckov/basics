<?php

namespace App\Http\Controllers;

use App\Models\Uporabnik;
use Illuminate\Http\Request;

class UporabnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $uporabnik = Uporabnik::all();
        
        return view('uporabnik.index', ['uporabnik' => $uporabnik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uporabnik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Uporabnik::create([
            'uporabnik' => $request['uporabnik'],
            'ime' => $request['ime'],
            'priimek' => $request['priimek'],
            'naslov' => $request['naslov'],
            'starost' => $request['starost']
        ]);
        
        return redirect()->route('uporabnik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $uporabnik = Uporabnik::where('id', $id)->first();
 
        return view('uporabnik.edit', ['uporabnik' => $uporabnik ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $uporabnik = Uporabnik::where('id', $id)->first();
        
        $uporabnik->uporabnik = $request['uporabnik'];
        $uporabnik->ime = $request['ime'];
        $uporabnik->priimek = $request['priimek'];
        $uporabnik->naslov = $request['naslov'];
        $uporabnik->starost = $request['starost'];
        
        $uporabnik->save();
        
        return redirect()->route('uporabnik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Uporabnik::find($id)->delete();
        
        return redirect()->route('uporabnik.index');
    }
}
