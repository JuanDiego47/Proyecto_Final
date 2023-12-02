<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\lesson;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=Reservation::all();
        return view("reservation.index")->with("reservations",$reservations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $reservation=Reservation::all();
        $UserNormal=User::where('role_id', 2)->get();
        $lesson=lesson::all();
        $data = array(
            "lista_usuarios" => $UserNormal,
            "lista_clases" => $lesson,
        );
        return view('reservation/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $reservation=new Reservation();
        $reservation->id_miembro=$request->id_miembro;
        $reservation->id_clase=$request->id_clase;

        $reservation->save();
        return redirect("reservation")->with('mensaje','reservacion agregada con exito');   


    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservation=Reservation::find($id);
        $UserNormal=User::where('role_id', 2)->get();
        $lesson=lesson::all();
        return view('reservation.edit', compact('reservation', 'lesson', 'UserNormal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $reservation=Reservation::find($id);
        $reservation->id_miembro=$request->id_miembro;
        $reservation->id_clase=$request->id_clase;
        $reservation->save();
        return redirect("reservation")->with('mensaje','reservacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect("reservation")->with('mensaje','reservacion  borrada con exito');
    }
}
