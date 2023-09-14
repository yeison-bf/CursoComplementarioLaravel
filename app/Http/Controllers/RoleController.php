<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $permisos = Permission::all();
        return view('Roles.list', compact('roles', 'permisos'));
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombreRol = request()->input('nombreRole');
        $permisos = request('permisos_listado');
   
        $role = Role::create(['name' => $nombreRol]);

  
        for ($i=0; $i < count($permisos) ; $i++) { 
            $role->givePermissionTo($permisos[$i]);
        }

       return redirect()->route('roles.show.list');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
