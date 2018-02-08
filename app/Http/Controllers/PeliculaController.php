<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::all();

        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:200',
            'ano' => 'required|integer|min:1900|max:2050',
            'poster' => 'image',
        ]);

        $properties = $request->only('titulo', 'ano'); 

        $properties['identificador'] = Pelicula::generateUniqueSlug($request->get('titulo'));      

        if ($request->has('poster')) {
            $archivo = $request->file('poster');
            $nombreArchivo = $archivo->getClientOriginalName();
            $archivo->move(public_path(). '/uploads/',$nombreArchivo);

            $properties['poster'] = '/uploads/'.$nombreArchivo;
        }
        $pelicula = Pelicula::create($properties);

        /*$pelicula = new Pelicula;
        $pelicula->titulo = $request->get('titulo');
        $pelicula->ano = $request->get('ano');
        $pelicula->identificador = $request->get('identificador');
        $pelicula->save();*/

        return redirect(route('peliculas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        return view('peliculas.show', compact('pelicula'));
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
