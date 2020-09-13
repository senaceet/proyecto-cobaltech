<?php

namespace App\Http\Controllers\DocType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DocType;

class DocTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctype=DocType::all();
        return view('doctype.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctype=DocType::all();
        return view('doctype.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctype=DocType::create($request->all());
        return redirect()->route('doctype.index')->with('Mensaje','Se creo correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctype=DocType::find($id);
        return view('doctype.show',compact ('doctype'));
        
        return redirect()->route('doctype.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctype=Doctype::find($id);
        return view('doctype.edit');

        return redirect()->route('doctype.index')->with('mensaje','se actualizo correctamente!!!');
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
        $doctype=Doctype::find($id)->update([
            'abbreviation'=>$request->input('abbreviation'),
            'doctype'=>$request->input('doctype')
            ]);
            return redirect()->route('doctype.index')->whit('Su campo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctype=Doctype::find($id)->delete();
        return "Se ha eliminado su registro";
    }
}
