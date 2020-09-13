<?php

namespace App\Http\Controllers\DebitCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DebitCard;

class DebitCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debitcard=DebitCard::all();
        return view('debitcard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debitcard=DebitCard::all();
        return view('debitcard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $debitcard=DebitCard::create($request->all());
        return redirect()->route('debitcard.index')->with('Mensaje', 'Se creo correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $debitcard=DebitCard::find($id);
        return view('debitcard.show', compact('debitcard'));
        
        return redirect()->route('debitcard.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $debitcard=DebitCard::find($id);
        return view('debitcard.edit');

        return redirect()->route('debitcard.index')->with('mensaje', 'se actualizo correctamente!!!');
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
        $debitcard=DebitCard::find($id)->update([
        'transaction'=>$request->input('transaction')
        ]);
        return redirect()->route('debitcard.index')->whit('Su campo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $debitcard=DebitCard::find($id)->delete();
        return "Se ha eliminado su registro";
    }
}

