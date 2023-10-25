<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $_POST = FacadesDB:: table('detallesalida')->get();
        return $_POST;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        FacadesDB::insert('insert into `detallesalida`(`idDetalleSalida`,`fechaEntregaDetalleSalida`, `idSalida`, `idequipo`) VALUES (null,?,?,?)', []);
        return "Insertado";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        FacadesDB::update('update detallesalida set fechaEntregaDetalleSalida =?,idSalida=?,idequipo=?  where idDetalleSalida = ?', []);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
