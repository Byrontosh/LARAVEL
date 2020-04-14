<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;



class NotaController extends Controller
{


    public function __construct()
    {
         $this->middleware('auth');
    }


    public function index()
    {
       
        $usuarioEmail = auth()->user()->email;
        $notas = App\Nota::where('usuario', $usuarioEmail)->paginate(5);

        return view('notas.lista',compact('notas'));
       
    }


    public function create()
    {
        return view('notas.crear');
    }


    public function store(Request $request)
    {
        
        $notanueva = new APP\Nota;
        $notanueva->nombre=$request->nombre;
        $notanueva->descripcion=$request->descripcion;
        $notanueva->usuario=auth()->user()->email;
        $notanueva ->save();
        return redirect('/notas');
    }


    public function show($id)
    {
        
        $nota= APP\Nota::FindOrFail($id);

        return view('notas.detalle',compact('nota'));
        
    }


    public function edit($id)
    {
        $nota= APP\Nota::FindOrFail($id);
        return view('notas.editar',compact('nota'));
    }


    public function update(Request $request, $id)
    {
     
        $notaactualizar= APP\Nota::FindOrFail($id);
        $notaactualizar -> nombre = $request->nombre;
        $notaactualizar -> descripcion =  $request->descripcion;
        $notaactualizar -> save();
        return redirect('/notas');
    }


    public function destroy($id)
    {
        $notaeliminar = APP\Nota::FindOrFail($id);
        $notaeliminar ->delete();
        return redirect('/notas');
    }
}
