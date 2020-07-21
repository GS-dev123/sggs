<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hdd;

class hddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hdds = Hdd::all();
        return view('hdd', compact('hdds'));
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

      //-----------------------------

      $hdds = new Hdd();

      $hdds->marca = $marca;
      $hdds->tipo = $tipo;
      $hdds->capacidade = $capacidade;
      $hdds->modelo = $modelo;

      $hdds->save();

      return redirect('/home1')->with('sucess', 'Gravado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hdd $id)
    {
        $hdds = Hdd::find($id);
        return view('/show_hdd', compact('hdds','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hdd $id)
    {
        $hdds = Hdd::find($id);
        return view('/edit_hdd', compact('hdds', 'id'));
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

        //-----------------------------------

        $hdds = Hdd::find($id);
        $hdds->marca = $marca;
        $hdds->tipo = $tipo;
        $hdds->capacidade = $capacidade;
        $hdds->modelo = $modelo;

        $hdds->save();
        return redirect('/hdd')->with('sucess','Dados actualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hdds = Hdd::find($id);
        $hdds->delete();

        return redirect('/hdd')->with('sucess','Apagado com sucesso');
    }
}
