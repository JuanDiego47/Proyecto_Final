<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\Classroom;
use App\Models\Discipline;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lessons=Lesson::all();
        return view("lesson.index")->with("lessons",$lessons);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $lesson=new Lesson();
        // $lesson=lesson::pluck('id','nombre_salon');
        $lesson=lesson::all();
        $classroom=Classroom::all();
        $discipline=Discipline::all();
        //aqui se toma a los usuarios con rol 1 es decir solo por ejemplo los entrenadores
        $usersWithRole1 = User::where('role_id', 1)->get();

        $data = array(
            "lista_salones" => $classroom,
            "lista_disciplinas" => $discipline,
            "lista_usuarios" => $usersWithRole1,
        );
        return view('lesson/create',$data);

        // return view("lesson.create");

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
            'fecha_leccion'=>'required|Date',
            'hora_inicio'=>['required', 'regex:/^(1[0-2]|0?[1-9]):[0-5][0-9]\s?[APap][Mm]$/'],
            'hora_fin'=>['required', 'regex:/^(1[0-2]|0?[1-9]):[0-5][0-9]\s?[APap][Mm]$/'],
            'id_instructor'=>'required',
            'id_disciplina'=>'required',
            'id_salon'=>'required',

        ];

        $mensajes=[
            'fecha_leccion.required'=>'la fecha es requerida',
            'hora_inicio.required'=>'la fecha de inicio es requerida',
            'hora_fin.required'=>'la fecha de finalizacion es requerida',
            'id_instructor.required'=>' el id del instructor es requerido',
            'id_disciplina.required'=>'el id de la disciplina es requerido',
            'id_salon.required'=>'el id del salon es requerido',
            'hora_inicio.regex' => 'El formato de la hora no es válido. Use el formato de 12 horas con AM/PM.',
            'hora_fin.regex' => 'El formato de la hora no es válido. Use el formato de 12 horas con AM/PM.',
            

        ];
        $this->validate($request,$campos,$mensajes);

        $lesson=new Lesson();
        $lesson->fecha_leccion=$request->fecha_leccion;
        $lesson->hora_inicio=$request->hora_inicio;
        $lesson->hora_fin=$request->hora_fin;
        $lesson->id_instructor=$request->id_instructor;
        $lesson->id_disciplina=$request->id_disciplina;
        $lesson->id_salon=$request->id_salon;

        $lesson->save();
        // return redirect()->route("discipline.index");
        return redirect("lesson")->with('mensaje','Leccion agregada con exito');   

    }

    /**
     * Display the specified resource.
     */
    public function show(lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $lesson = Lesson::find($id);
        $classroom = Classroom::all();
        $discipline = Discipline::all();
        $usersWithRole1 = User::where('role_id', 1)->get();

        return view('lesson.edit', compact('lesson', 'classroom', 'discipline', 'usersWithRole1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        //
        //validacion servidor, se pone el name del campo en el formulario no en la base de datos
        //estructura unique=tabla,columna
        $campos=[
            'fecha_leccion'=>'required|Date',
            'hora_inicio'=>['required', 'regex:/^(1[0-2]|0?[1-9]):[0-5][0-9]\s?[APap][Mm]$/'],
            'hora_fin'=>['required', 'regex:/^(1[0-2]|0?[1-9]):[0-5][0-9]\s?[APap][Mm]$/'],
            'id_instructor'=>'required',
            'id_disciplina'=>'required',
            'id_salon'=>'required',

        ];

        $mensajes=[
            'fecha_leccion.required'=>'la fecha es requerida',
            'hora_inicio.required'=>'la fecha de inicio es requerida',
            'hora_fin.required'=>'la fecha de finalizacion es requerida',
            'id_instructor.required'=>' el id del instructor es requerido',
            'id_disciplina.required'=>'el id de la disciplina es requerido',
            'id_salon.required'=>'el id del salon es requerido',
            'hora_inicio.regex' => 'El formato de la hora no es válido. Use el formato de 12 horas con AM/PM.',
            'hora_fin.regex' => 'El formato de la hora no es válido. Use el formato de 12 horas con AM/PM.',
            

        ];
        $this->validate($request,$campos,$mensajes);
        $lesson=lesson::find($id);
        $lesson->fecha_leccion=$request->fecha_leccion;
        $lesson->hora_inicio=$request->hora_inicio;
        $lesson->hora_fin=$request->hora_fin;
        $lesson->id_instructor=$request->id_instructor;
        $lesson->id_disciplina=$request->id_disciplina;
        $lesson->id_salon=$request->id_salon;

        $lesson->save();
        // return redirect()->route("discipline.index");
        return redirect("lesson")->with('mensaje','Leccion actualizada con exito');   

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lesson=Lesson::find($id);
        $lesson->delete();
        return redirect("lesson")->with('mensaje','leccion borrada con exito');
    }
}
