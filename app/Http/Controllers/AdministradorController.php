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
        $_POST = FacadesDB::select('select * from administrador ORDER BY idadministrador = ?', []);

        return $_POST;
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
        FacadesDB::insert('insert INTO `administrador`(idadministrador,`cedulaadministrador`, `nombreadministrador`, `aprellidoadministrador`, `telefonoadministrador;`) VALUES (null,?,?)', []);
        return "Insertado";
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
        FacadesDB::update('update administrador set cedulaadministrador =?,nombreadministrador=?,aprellidoadministrador=?,telefonoadministrador=?  where idadministrador = ?', []);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::delete('delete from administrador where idadministrador = ?', [

            
        ]);
    }
}
