<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $classrooms=Classroom::all();
        
        return view("classroom.index")->with("classrooms",$classrooms);
        
    }

    public function pdf()
    {
        //
        $classrooms=Classroom::all();
        $pdf=PDF::loadView('classroom.pdf',['classrooms'=>$classrooms]);
        return $pdf->stream();

        
        // return view("classroom.pdf",compact('classrooms'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("classroom.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validacion servidor, se pone el name del campo en el formulario no en la base de datos
        //estructura unique=tabla,columna
        $campos=[
            'nombre_salon'=>'required|unique:classrooms,nombre_salon|string|min:3|max:10',
            'ubicacion'=>'required|string|min:3|max:10',
        ];


        $mensajes=[
            'nombre_salon.required'=>'el nombre es requerido',
            'nombre_salon.unique'=>'el nombre debe ser unico',
            'ubicacion.required'=>'la ubicacion es requerida',
            

        ];

        $this->validate($request,$campos,$mensajes);

        $classroom=new Classroom();
        $classroom->nombre_salon=$request->nombre_salon;
        $classroom->ubicacion=$request->ubicacion;

        $classroom->save();
        // return redirect()->route("discipline.index");
        return redirect("classroom")->with('mensaje','Salon agregado con exito');   

    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classrooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $classroom=Classroom::find($id);
        return view("classroom.edit",compact("classroom"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id )
    {
        //
        $campos=[
            'nombre_salon'=>'required|unique:classrooms,nombre_salon|string|min:3|max:10',
            'ubicacion'=>'required|string|min:3|max:10',
        ];


        $mensajes=[
            'nombre_salon.required'=>'el nombre es requerido',
            'nombre_salon.unique'=>'el nombre debe ser unico',
            'ubicacion.required'=>'la ubicacion es requerida',
            

        ];

        $this->validate($request,$campos,$mensajes);

        $classroom=Classroom::find($id);
        $classroom->nombre_salon=$request->nombre_salon;
        $classroom->ubicacion=$request->ubicacion;

        $classroom->save();
        // return redirect()->route("discipline.index");
        return redirect("classroom")->with('mensaje','Salon actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $classroom=Classroom::find($id);
        $classroom->delete();
        return redirect("classroom")->with('mensaje','salon borrado con exito');
    }
}
