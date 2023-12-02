<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles=role::all();
        
        return view("role.index")->with("roles",$roles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("role.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $role=new Role();
        $role->name=$request->name;
        $role->label=$request->label;
        $role->save();
        return redirect("role")->with('mensaje','rol agregada con exito');   

    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role=Role::find($id);
        return view("role.edit",compact("role"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $role=Role::find($id);
        $role->name=$request->name;
        $role->label=$request->label;
        $role->save();
        return redirect("role")->with('mensaje','rol actualizada con exito');   

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $role=Role::find($id);
        $role->delete();
        return redirect("role")->with('mensaje','rol borrado con exito');
    }
}
