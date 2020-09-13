<?php

namespace App\Http\Controllers\DeliveryStatus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DeliveryStatus;

class DeliveryStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverystatus=DeliveryStatus::all();
        return view('deliverystatus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deliverystatus=DeliveryStatus::all();
        return view('deliverystatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deliverystatus=DeliveryStatus::create($request->all());
        return redirect()->route('deliverystatus.index')->with('Mensaje','Se creo correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deliverystatus=DeliveryStatus::find($id);
        return view('deliverystatus.show',compact ('deliverystatus'));
        
        return redirect()->route('deliverystatus.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliverystatus=DeliveryStatus::find($id);
        return view('deliverystatus.edit');

        return redirect()->route('deliverystatus.index')->with('mensaje','se actualizo correctamente!!!');
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
        $deliverystatus=DeliveryStatus::find($id)->update([
            'status'=>$request->input('status')
            ]);
            return redirect()->route('deliverystatus.index')->whit('Su campo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deliverystatus=DeliveryStatus::find($id)->delete();
        return "Se ha eliminado su registro";
    }
    }

