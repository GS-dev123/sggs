<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ram;

class ramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rams = Ram::all();
        return view('Ram', compact('rams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = $request['marca'];
        $tipo = $request['tipo'];
        $capacidade = $request['capacidade'];
        $modelo = $request['modelo'];
        //-------------------------
        $rams = new Ram();
        $rams->marca = $marca;
        $rams->tipo = $tipo;
        $rams->capacidade = $capacidade;
        $rams->modelo = $modelo;
        //-------------------------
        $rams->save();
        //-------------------------
        return redirect('/home1')->with('message', 'xxxxx');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ram $id)
    {
        $rams = Ram::find($id);
        return view('/show_ram', compact('rams','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ram $id)
    {
        $rams = Ram::find($id);
        return view('/edit_ram', compact('rams', 'id'));
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
      $marca = $request['marca'];
      $tipo = $request['tipo'];
      $capacidade = $request['capacidade'];
      $modelo = $request['modelo'];
      
      $ram = Ram::find($id);
      $ram->marca = $marca;
      $ram->tipo = $tipo;
      $ram->capacidade = $capacidade;
      $ram->modelo = $modelo;
      $ram->save();

      return redirect('/ram')->with('sucess','Dados actualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ram = Ram::find($id);
        $ram->delete();
        return redirect('/ram')->with('sucess', 'Eliminado com sucesso');
    }
}
