<?php

namespace App\Http\Controllers;

use App\Dpto;
use App\Ciudad;

use Illuminate\Http\Request;

class CiudadController extends Controller
{

    public function index(Request $request)
    {
        // SELECT * FROM CIUDAD;
        $ciudads = Ciudad::select([
            'ciudads.id as id',
            'ciudads.nombre as nombre',
            'dptos.nombre as dnombre'])
        ->join('dptos','ciudads.dpto_id','=','dptos.id');

        if ($request->ajax()){
            return datatables()
            ->eloquent($ciudads)
            ->addColumn('action', function ($ciudads){
                return view('principal.ciudades.partials.dataAction',compact('ciudads'));
            })
            ->rawColumns(['action'])
            ->toJson();
        }

        return view('principal.ciudades.index',compact('ciudads'));
    }

    public function create()
    {
        $dptos = Dpto::pluck('nombre','id');
        return view('principal.ciudades.create',compact('dptos'));
    }


    public function store(Request $request)
    {
        $ciudads = Ciudad::create($request->all());
        return redirect()->route('principal.ciudades.index')->with('info','Ciudad Guardado');
   
    }

    public function show($id)
    {
        $ciudad = Ciudad::find($id);
        return view('principal.ciudades.show',compact('ciudad'));
    }

 
    public function edit($id)
    {
        $ciudad = Ciudad::find($id);
        $dpto = Dpto::pluck('nombre','id');
        return view('principal.ciudades.edit',compact('ciudad','dpto'));
    }


    public function update(Request $request,$id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->update($request->all());
        return redirect()->route('principal.ciudades.index')->with('info','Ciudad Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return back()->with('info','Ciudad Eliminado Correctamente');
        
    }
}
