<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as FacadesDB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = FacadesDB::select('select * from usuario', []);

        return view('usuario', [
            'elusuaruio' => $usuario
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FacadesDB::insert('insert INTO `usuario`(idusuario,`nombre`, `contraseña`,`correo` ) VALUES (null,?,?,?)', [

        $request->nombre,
        $request->contraseña,
        $request->correo,
    ]);
    return redirect()->route('inicio');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FacadesDB::update('update usuario set nombre =?,contraseña=?  where idusuario = ?', []);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::delete('delete from usuario where idusuario = ?', []);
    }
}

