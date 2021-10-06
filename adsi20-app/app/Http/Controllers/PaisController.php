<?php

namespace App\Http\Controllers;

use App\Pais;


use App\Imports\PaisImport;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // SELECT * FROM PAIS;
        $paises = Pais::query();

        if ($request->ajax()){
            return datatables()
            ->eloquent($paises)
            ->addColumn('action', function ($paises){
                return view('principal.paises.partials.dataAction',compact('paises'));
            })
            ->rawColumns(['action'])
            ->toJson();
        }

        return view('principal.paises.index',compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('principal.paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paises = Pais::create($request->all());
        return redirect()->route('principal.paises.index')->with('info','Pais Guardado');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pais = Pais::find($id);
        return view('principal.paises.show',compact('pais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pais = Pais::find($id);
        return view('principal.paises.edit',compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pais = Pais::find($id);
        $pais->update($request->all());
        return redirect()->route('principal.paises.index')->with('info','Pais Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();
        return back()->with('info','Pais Eliminado Correctamente');
        
    }

    public function importarExcel(Request $request)
    {
        Excel::import(new PaisImport,request()->file('filepais'));
        return back();
    }
}
