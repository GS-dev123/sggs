<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;

class laptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laps = Laptop::all();
        return view('laptop', compact('laps'));
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
        $geracao = $request['geracao']."th";
        $modelo = $request['modelo'];
        $polegadas = $request['polegadas']."\"";
        $cap_ram = $request['cap_ram'];
        $tipo_ram = $request['tipo_ram'];
        $cap_hdd = $request['cap_hdd'];
        $tipo_hdd = $request['tipo_hdd'];
        $grafica = $request['grafica'];
        $cap_grafica = $request['cap_grafica'];
        $duracao_bateria = $request['duracao_bateria'];
        $volts_carregador = $request['volts_carregador'];
        $problema = $request['problema'];
        
        $laps = new Laptop();
        //------------------------------------------------+
        $laps->marca = $marca;
        $laps->geracao =$geracao;
        $laps->modelo = $modelo;
        $laps->polegadas = $polegadas;
        $laps->cap_ram = $cap_ram;
        $laps->tipo_ram = $tipo_ram;
        $laps->cap_hdd = $cap_hdd;
        $laps->tipo_hdd = $tipo_hdd;
        $laps->grafica = $grafica;
        $laps->cap_grafica = $cap_grafica;
        $laps->duracao_bateria = $duracao_bateria;
        $laps->volts_carregador = $volts_carregador;
        $laps->problema = $problema;

        //-------------------------------------------------+
        $laps->save();

        return view('/home1')->with('sucess','Dados gravados com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $id)
    {
        $laps = Laptop::find($id);
        return view('/show_laptop',compact('laps','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $id)
    {
        $laps = Laptop::find($id);
        return view('/edit_laptop', compact('laps', 'id'));
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
        $geracao = $request['geracao'];
        $modelo = $request['modelo'];
        $polegadas = $request['polegadas'];
        $cap_ram = $request['cap_ram'];
        $tipo_ram = $request['tipo_ram'];
        $cap_hdd = $request['cap_hdd'];
        $tipo_hdd = $request['tipo_hdd'];
        $grafica = $request['grafica'];
        $cap_grafica = $request['cap_grafica'];
        $duracao_bateria = $request['duracao_bateria'];
        $volts_carregador = $request['volts_carregador'];
        $problema = $request['problema'];
        
        $laps = Laptop::find($id);
        //------------------------------------------------+
        $laps->marca = $marca;
        $laps->geracao =$geracao;
        $laps->modelo = $modelo;
        $laps->polegadas = $polegadas;
        $laps->cap_ram = $cap_ram;
        $laps->tipo_ram = $tipo_ram;
        $laps->cap_hdd = $cap_hdd;
        $laps->tipo_hdd = $tipo_hdd;
        $laps->grafica = $grafica;
        $laps->cap_grafica = $cap_grafica;
        $laps->duracao_bateria = $duracao_bateria;
        $laps->volts_carregador = $volts_carregador;
        $laps->problema = $problema;

        //-------------------------------------------------+
        $laps->save();

        return redirect('/laptop')->with('sucess', 'Dados actualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laps = Laptop::find($id);
        $laps->delete();
        //--------------------------------------------------+

        return redirect('/laptop')->with('sucess','Dados apagado com sucesso');
    }
}
