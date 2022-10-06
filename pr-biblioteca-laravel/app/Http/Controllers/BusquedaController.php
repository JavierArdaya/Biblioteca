<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\LIBRO;
use DB;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $clients=DB::table('libro')
                    ->select('id','Titulo','TipoEncuadernacion')
                    ->where('Titulo','LIKE','%'.$texto.'%')
                    ->orwhere('tipoEncuadernacion','LIKE','%'.$texto.'%')
                    ->orderBy('Titulo','asc')
                    ->paginate(10);
        return view('busqueda/index',compact('libros','texto'));
    }

    public function obtenerLibros(Request $request)
    {
        $libros = LIBRO::where([]);
        
        if (!empty($request['Titulo'])) {
            $criteria = strtolower($request['Titulo']);
            $libros->whereRaw("LOWER(Titulo) LIKE '%$criteria%'");
        }
        $libros = $libros->paginate(10);
        return view('busqueda.index',[
            'libro'=> $libros,
            'Titulo'=> $request['Titulo'],
            'NombrePortada'=> $request['NombrePortada'],
            'TipoEncuadernacion'=> $request['TipoEncuadernacion']
        ]);
    }

    public function getLibros() {

        return LIBRO::all();

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
