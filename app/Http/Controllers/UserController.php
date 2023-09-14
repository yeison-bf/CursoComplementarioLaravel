<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('Users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('Users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->document = $request ->input('documento');
        $user->name = $request ->input('nombre');
        $user->lastname = $request ->input('apellidos');
        $user->role = $request ->input('rol');
        $user->email = $request ->input('correo');
        $user->password = Hash::make($request->input('contrasena'));
        $user->numberPhone = $request ->input('telefono');
        $user->company = $request ->input('compania');
        $user->estado = 1;

        $roleExisting = Role::find($request ->input('rol'));
        if($roleExisting){
            $user->save();
            return response()->json($user);
        }else{
            return response()->json($user);
        }


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
