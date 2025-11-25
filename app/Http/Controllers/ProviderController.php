<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function todosLosProveedores(){
        //$todos_los_proveedores = Provider::all();
        $todos_los_proveedores = Provider::with('laboratorio')->get();
        return view('provider.index',compact('todos_los_proveedores'));
    }

    public function verProveedor($id_a_buscar){
        $datos_proveedor = Provider::where('id',$id_a_buscar)->with('laboratorio')->first();
        return view('provider.ver-proveedor',compact('datos_proveedor'));
    }

    public function eliminarProveedor($id_a_buscar){
        $proveedor_a_eliminar = Provider::where('id',$id_a_buscar)->first();
        $proveedor_a_eliminar->delete();

        return redirect(route('proveedores_inicio'));
    }
}
