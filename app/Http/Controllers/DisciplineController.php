<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $disciplines=Discipline::all();
        return view("discipline.index")->with("disciplines",$disciplines);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("discipline.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//se almacena con los nombre dados en el formulario no id
    {
        //validacion servidor, se pone el name del campo en el formulario no en la base de datos
        //estructura unique=tabla,columna
        $campos=[
            'nombredisciplina'=>'required|unique:disciplines,nombre_disciplina|string',
            'descripciondisciplina'=>'nullable|string',
            'fotodisciplina'=>'nullable|max:10000|mimes:jpeg,png,jpg',
        ];


        $mensajes=[
            'nombredisciplina.required'=>'el nombre es requerido',
            'nombredisciplina.unique'=>'el nombre debe ser unico',
            'descripciondisciplina.nullable'=>'La descripcion no tiene el formato adecuado',
            'fotodisciplina.nullable'=>'La foto no tiene el formato adecuado',

        ];

        $this->validate($request,$campos,$mensajes);

        // ingresando datos
        $discipline=new Discipline();
        $discipline->nombre_disciplina=$request->nombredisciplina;
        $discipline->descripcion_disciplina=$request->descripciondisciplina;
        // $discipline->foto=$request->file("fotodisciplina")->store("uploads","public");
        if($request->hasFile("fotodisciplina")){
            $discipline->foto=$request->file("fotodisciplina")->store("uploads","public");
         }
        $discipline->save();
        // return redirect()->route("discipline.index");
        return redirect("discipline")->with('mensaje','Disciplina agregada con exito');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $discipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $discipline=Discipline::find($id);
        return view("discipline.edit",compact("discipline"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        //validacion servidor, se pone el name del campo en el formulario no en la base de datos

        $campos=[
            //revisar este campo
            'nombredisciplina'=>'required|unique:disciplines,nombre_disciplina|string',
            'descripciondisciplina'=>'nullable|string',
            // 'fotodisciplina'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];


        $mensajes=[
            'nombredisciplina.required'=>'el nombre es requerido',
            'nombredisciplina.unique'=>'el nombre debe ser unico',
        ];

        if($request->hasFile("fotodisciplina")){
            $campos=['fotodisciplina'=>'nullable|max:10000|mimes:jpeg,png,jpg',];
            $mensajes=['fotodisciplina.nullable'=>'la foto es requerida'];
        }
            

        $this->validate($request,$campos,$mensajes);

        $discipline=Discipline::find($id);
        $discipline->nombre_disciplina=$request->nombredisciplina;
        $discipline->descripcion_disciplina=$request->descripciondisciplina;
        // $discipline->foto=$request->file("fotodisciplina")->store("uploads","public");
        if($request->hasFile("fotodisciplina")){
            Storage::delete('public/'.$discipline->foto);
            $discipline->foto=$request->file("fotodisciplina")->store("uploads","public");
         }
        $discipline->save();
        // return redirect()->route("discipline.index");
        return redirect("discipline")->with('mensaje','Disciplina modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $discipline=Discipline::find($id);

        if (Storage::delete('public/'.$discipline->foto)){
            $discipline->delete();

        }else{
            $discipline->delete(); 
        }
        
        // return redirect()->route("discipline.index");
        return redirect("discipline")->with('mensaje','Disciplina borrada con exito');
    }
}
