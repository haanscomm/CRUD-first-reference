<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view('welcome', compact('usuarios'));
    }
}
