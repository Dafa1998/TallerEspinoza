<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Proveedores;

class ProveedorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $Proveedores = Proveedores::orderby('id','ASC')->paginate(1);

        return view('CrudProveedores.Proveedores' , compact('Proveedores'));
    }


    public function post(Request $request){

        $validator = Validator::make($request->all(),[
            'nombre_proveedor' => 'required|max:255',
            'nombre_contacto' => 'required|max:255',
            'cargo_contacto' => 'required|max:255',
            'telefono' => 'required|max:10',
            'ciudad' => 'required|max:255',
            'pais' => 'required|max:255',
            'direccion' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/proveedorAdd')
            ->withInput()
            ->withErrors($validator);
        }

            $Proveedores = new Proveedores;

            $Proveedores->nombre_proveedor = $request->nombre_proveedor;
            $Proveedores->nombre_contacto = $request->nombre_contacto;
            $Proveedores->cargo_contacto = $request->cargo_contacto;
            $Proveedores->telefono = $request->telefono;
            $Proveedores->ciudad = $request->ciudad;
            $Proveedores->pais = $request->pais;
            $Proveedores->direccion = $request->direccion;

            $Proveedores->save();

            return redirect('/menu');
    }
}
