<?php

namespace App\Http\Controllers;

use App\comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = comic::all();

        return view('index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('creaFumetto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required|max:100|min:5',
                'description'=>'required',
                'thumb'=>'required|URL',
                'price'=>'required|numeric',
                'series'=>'required|max:100',
                'sale_date'=>'required|date_format:Y-m-d',
                'type'=>'required|max:20',
            ]
        );

        

        $data = $request->all();

        $nuovoFumetto= new comic();
        $nuovoFumetto ->fill($data);
        $nuovoFumetto->save();

        return view('creaFumetto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = comic::find($id);
        return view('show', ['fumetto'=>$fumetto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('modifica', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title'=>'required|max:100|min:5',
                'description'=>'required',
                'thumb'=>'required|URL',
                'price'=>'required|numeric',
                'series'=>'required|max:100',
                'sale_date'=>'required|date_format:Y-m-d',
                'type'=>'required|max:10',
            ]
        );

        $data = $request->all();
        $comic->update($data);
        $comic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
