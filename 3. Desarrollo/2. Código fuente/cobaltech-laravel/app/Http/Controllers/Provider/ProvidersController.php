<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Provider;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provider=Provider::all();
        return view('provider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider=Provider::all();
        return view('provider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider=Provider::create($request->all());
        return redirect()->route('provider.index')->with('Mensaje','Se creo correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provider=Provider::find($id);
        return view('provider.show',compact ('provider'));
        
        return redirect()->route('provider.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider=Provider::find($id);
        return view('provider.edit');

        return redirect()->route('provider.index')->with('mensaje','se actualizo correctamente!!!');
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
        $providers=Providers::find($id)->update([
            'businessname'=>$request->input('businessname'),
            'contact'=>$request->input('contact'),
            'position'=>$request->input('position'),
            'extension'=>$request->input('extension'),
            'mobile'=>$request->input('mobile'),
            'address'=>$request->input('address'),
            'warehouse'=>$request->input('warehouse'),
            'website'=>$request->input('website'),
            'email'=>$request->input('email'),
            ]);
            return redirect()->route('providers.index')->whit('Su campo se actualizo correctamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider=Provider::find($id)->delete();
        return "Se ha eliminado su registro";
    }
}
