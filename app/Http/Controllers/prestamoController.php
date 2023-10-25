<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Http\Request;


class prestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $_POST = FacadesDB::select('select * from salidaequipo ORDER BY idsalida = ?', []);

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
        FacadesDB::insert('insert INTO `salidaequipo`(idsalida,`fechasalida`, `idusuario`, `idadministrador`) VALUES (null,?,?,?)', []);
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
        FacadesDB::update('update salidaequipo set fechasalida =?,idusuario=?,idadministrador=?  where idsalida = ?', []);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::delete('delete from salidaequipo where idsalida = ?', []);
    }
}
