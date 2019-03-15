<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magacin;
class MagacinControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magacin = Magacin::all();

            return view('magacin.index', compact('magacin'));
    }

    
    public function create()
    {
        return view ('magacin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'naziv' => ['required', 'min:3', 'max:255'],
            'lokacija' => ['required', 'min:3', 'max:255'],
            'broj_telefona' => ['required', 'min:3', 'max:255']

        ]);

        $magacin = new Magacin();

        $magacin->naziv = request('naziv');
        $magacin->lokacija = request('lokacija');
        $magacin->broj_telefona = request('broj_telefona');

        $magacin->save();

        return redirect('magacin');
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
        $magacin = Magacin::find($id);

        return view('magacin.edit', compact('magacin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $magacin = Magacin::find($id);

    $magacin->naziv = request('naziv');
    $magacin->lokacija = request('lokacija');
    $magacin->broj_telefona = request('broj_telefona');

    $magacin->save();

        return redirect('/magacin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Magacin::find($id)->delete();

        return redirect('/magacin');
    }
}
