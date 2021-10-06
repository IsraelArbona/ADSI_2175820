<?php

namespace App\Http\Controllers;

use App\User;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                // SELECT * FROM USERS;
                $users = User::query();

                if ($request->ajax()){
                    return datatables()
                    ->eloquent($users)
                    ->addColumn('action', function ($users){
                        return view('principal.users.partials.dataAction',compact('users'));
                    })
                    ->rawColumns(['action'])
                    ->toJson();
                }
        
                return view('principal.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('principal.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::create($request->all());
        return redirect()->route('principal.users.index')->with('info','Usuario Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('principal.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('principal.users.edit',compact('user'));
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
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('principal.users.index')->with('info','Usuario Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('info','Usuario Eliminado Correctamente');
         
    }

    public function exportarExcel()
    {
        return new UserExport();
    }

    public function exportPdf()
    {
        $usuarios = User::query();

        $pdf = PDF::loadView('principal.users.pdf.informeGeneral', compact('usuarios'));
        $pdf->setOption('lowquality',true);
        $pdf->setOption('no-outline',false);
        $pdf->setOption('viewport-size','1366x1024');
        return $pdf->stream('informe_usuarios.pdf');

    }
}
