<?php

namespace App\Http\Controllers\CreditCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CreditCard;

class CreditCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditcard=CreditCard::all();
        return view('creditcard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $creditcard=CreditCard::all();
        return view('creditcard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creditcard=CreditCard::create($request->all());
        return redirect()->route('creditcard.index')->with('Mensaje','Se creo correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $creditcard=CreditCard::find($id);
        return view('creditcard.show',compact ('creditcard'));
        
        return redirect()->route('creditcard.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $creditcard=CreditCard::find($id);
        return view('creditcard.edit');

        return redirect()->route('creditcard.index')->with('mensaje','se actualizo correctamente!!!');
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
        $creditcard=CreditCard::find($id)->update([
            'owner'=>$request->input('owner'),
            'owner'=>$request->input('number'),
            'owner'=>$request->input('duedate'),
            'owner'=>$request->input('cvv'),
            ]);
            Return redirect()->route('creditcard.index')->whit('Su campo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creditcard=CreditCard::find($id)->delete();
        return "Se ha eliminado su registro";
    }
}
