<?php

namespace App\Http\Controllers\WarrantyStatus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WarrantyStatus;

class WarrantyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warrantystatus=WarrantyStatus::all();
        return view('warrantystatus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warrantystatus=WarrantyStatus::all();
        return view('warrantystatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warrantystatus=WarrantyStatus::create($request->all());
        return redirect()->route('warrantystatus.index')->with('Mensaje','Se creo correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warrantystatus=WarrantyStatus::find($id);
        return view('warrantystatus.show',compact ('warrantystatus'));
    
        return redirect()->route('warrantystatus.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warrantystatus=WarrantyStatus::find($id);
        return view('warrantystatus.edit');

        return redirect()->route('warrantystatus.index')->with('mensaje','se actualizo correctamente!!!');
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
        $warrantystatus=WarrantyStatus::find($id)->update([
            'status'=>$request->input('status')
            ]);
            Return redirect()->route('warranty.index')->whit('Su campo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warrantystatus=WarrantyStatus::find($id)->delete();
        return "Se ha eliminado su registro";
    }
}
