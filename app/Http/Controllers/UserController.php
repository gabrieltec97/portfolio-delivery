<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('Users.users', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Users.user-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->firstname = ucfirst($request->name);
        $user->lastname = ucfirst($request->surname);
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->city = $request->city;
        $user->user_type = $request->user_type;
        $user->neighbourhood = $request->neighboorhood;

        $user->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('Users.user-profile', [
            'user' => $user
        ]);
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
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->firstname = ucfirst($request->name);
        $user->lastname = ucfirst($request->surname);
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->city = $request->city;
        $user->user_type = $request->user_type;

        $user->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}
