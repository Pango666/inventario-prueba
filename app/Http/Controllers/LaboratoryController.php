<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    public function todosLosLaboratorios()
    {
        //trae todo de Laboratory
        $todos_laboratorios = Laboratory::with('products', 'proveedores')->get();
        return $todos_laboratorios;
    }

    public function traerLaboratorio($nombre_laboratorio)
    {
        //Cuando lo q te devuelve es un objeto
        $laboratorio = Laboratory::where('name', $nombre_laboratorio)->with('products', 'proveedores')->first();
        //return $laboratorio;
        return view('laboratory.ver-laboratorio', compact('laboratorio'));
    }

    public function traerVistaPrincipal(){
        $todos_laboratorios = Laboratory::all();
        //$todos_laboratorios = Laboratory::where('active',1)->get();
        return view('laboratory.index',compact('todos_laboratorios'));
    }

    public function traerLaboratoriosOrdenado($campo, $orden)
    {
        $laboratoriosOrdenados = Laboratory::OrderBy($campo,$orden)->get();
        //$laboratoriosOrdenados = Laboratory::OrderBy('name', 'asc')->get();
        return $laboratoriosOrdenados;
    }

    //public function eliminarLaboratorio($id){   // pedir el id del laboratorio a eliminar  2
    //    $laboratorio_a_eliminar = Laboratory::where('id',$id)->first();
    //    $laboratorio_a_eliminar->delete();
    //    return redirect()->route('dashboard_laboratorios');
        //echo "Laboratorio eliminado correctamente";
    //}

    public function eliminarLaboratorio($id){
        $laboratorio_a_eliminar = Laboratory::where('id',$id)->first();
        $laboratorio_a_eliminar->active = 0;
        $laboratorio_a_eliminar->save();
        return redirect()->route('dashboard_laboratorios');
    }

    public function activarLaboratorio($id){
        $laboratorio_a_eliminar = Laboratory::where('id',$id)->first();
        $laboratorio_a_eliminar->active = 1;
        $laboratorio_a_eliminar->save();
        return redirect()->route('dashboard_laboratorios');
    }

    public function mostrarFormularioCrear(){
        return view('laboratory.crear');
    }

    public function crearLaboratorio(Request $request){   //$request->email,
        $nombre_laboratorio = $request->name;
        $nit_laboratorio = $request->nit;
        $direccion_laboratorio = $request->address;
        $celular_laboratorio = $request->cellphone;
    
        $nuevo_laboratorio = new Laboratory();
        $nuevo_laboratorio->name = $nombre_laboratorio;
        $nuevo_laboratorio->nit = $nit_laboratorio;
        $nuevo_laboratorio->address = $direccion_laboratorio;
        $nuevo_laboratorio->cellphone = $celular_laboratorio;
        $nuevo_laboratorio->save();
        return redirect()->route('dashboard_laboratorios');
    }
}
