<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Empresa;
use App\Models\Role;
use App\Models\Rolpermission;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = Usuario::all();
        $roles = Rolpermission::all();
        $empresas=Empresa::all();
        return view('welcome', compact('usuarios','empresas','roles'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_id = Empresa::all();
        $role1= Role::all();
        return view('empresa.create', compact('company_id', 'role1'));
        
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
        //$datosusuarios = request()-> all();
       $datosusuarios = request()-> except('_token');
       Usuario::insert($datosusuarios);
       $usuarios = Usuario::all();
       $roles = Rolpermission::all();
       $empresas=Empresa::all();
       return view('welcome', compact('usuarios','empresas','roles'));
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
        $usuario = Usuario::findOrFail($id);
        $roles = Rolpermission::all();
        $empresas=Empresa::all();
        return view('empresa.update', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosusuarios = request()-> except('_token','_method','timestamp');
        Usuario::where('id','=',$id)->update($datosusuarios);
         $usuario = Usuario::findOrFail($id);
        $roles = Rolpermission::all();
        $empresas=Empresa::all();
        return view('empresa.update', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::where([
            'id' => $id
        ])->delete();
        return back();
       
   
    }
}