<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    
    public function index()
    {
        //retorno de vista
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $admin = new Admin();

        $admin->id_admin = $request->id_admin;
        $admin->admin_name = $request->admin_name;//acá van los campos de los formularios en las vistas renderizadas
        $admin->admin_lastname = $request->admin_lastname;
        $admin->admin_email = $request->admin_email;
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_user = $request->admin_user;
        $admin->admin_password = $request->admin_pass;

        $admin -> save();

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->id_admin = $request->id_admin;
        $admin->admin_name = $request->admin_name;//acá van los campos de los formularios en las vistas renderizadas
        $admin->admin_lastname = $request->admin_lastname;
        $admin->admin_email = $request->admin_email;
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_user = $request->admin_user;
        $admin->admin_password = $request->admin_pass;

        $admin -> save();
    }

    
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
    }
}
