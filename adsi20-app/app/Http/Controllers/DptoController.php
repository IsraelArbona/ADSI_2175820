<?php

namespace App\Http\Controllers;

use App\Dpto;
use App\Pais;

use App\Imports\DptosImport;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DptoController extends Controller
{

    public function index(Request $request)
    {
        // SELECT * FROM DPTOS;
        $dptos = Dpto::select([
            'dptos.id as id',
            'dptos.nombre as nombre',
            'pais.nombre as pnombre'])
        ->join('pais','dptos.pais_id','=','pais.id');

        if ($request->ajax()){
            return datatables()
            ->eloquent($dptos)
            ->addColumn('action', function ($dptos){
                return view('principal.dptos.partials.dataAction',compact('dptos'));
            })
            ->rawColumns(['action'])
            ->toJson();
        }

        return view('principal.dptos.index',compact('dptos'));
    }

    public function create()
    {
        $pais = Pais::pluck('nombre','id');
        return view('principal.dptos.create',compact('pais'));
    }


    public function store(Request $request)
    {
        $dptos = Dpto::create($request->all());
        return redirect()->route('principal.dptos.index')->with('info','Dpto Guardado');
   
    }

    public function show($id)
    {
        $dpto = Dpto::find($id);
        return view('principal.dptos.show',compact('dpto'));
    }

 
    public function edit($id)
    {
        $dpto = Dpto::find($id);
        $pais = Pais::pluck('nombre','id');
        return view('principal.dptos.edit',compact('dpto','pais'));
    }


    public function update(Request $request,$id)
    {
        $dpto = Dpto::find($id);
        $dpto->update($request->all());
        return redirect()->route('principal.dptos.index')->with('info','Dpto Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dpto = Dpto::find($id);
        $dpto->delete();
        return back()->with('info','Dpto Eliminado Correctamente');
        
    }

    public function importarExcel(Request $request)
    {
        Excel::import(new DptosImport,request()->file('filedptos'));
        return back();
    }
}
