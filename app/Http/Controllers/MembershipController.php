<?php

namespace App\Http\Controllers;

use App\Models\membership;
use App\Models\User;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $memberships=Membership::all();
        return view("membership.index")->with("memberships",$memberships);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $membership=Membership::all();
        $UserNormal=User::where('role_id', 2)->get();
        $data = array(
            "lista_usuarios" => $UserNormal,
        );
        return view('membership/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $membership=new Membership();
        $membership->id_miembro=$request->id_miembro;
        $membership->estado_mem=$request->estado_mem;
        $membership->save();
        return redirect("membership")->with('mensaje','membresia agregada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $membership=Membership::find($id);
        $UserNormal=User::where('role_id', 2)->get();
        return view('membership.edit', compact('membership', 'UserNormal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $membership=Membership::find($id);
        $membership->id_miembro=$request->id_miembro;
        $membership->estado_mem=$request->estado_mem;
        $membership->save();
        return redirect("membership")->with('mensaje','membresia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $membership=Membership::find($id);
        $membership->delete();
        return redirect("membership")->with('mensaje','membresia  borrada con exito');
    }
}
