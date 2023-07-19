<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Country;
use App\Models\Search;
use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view ('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user -> lastname = $request->input('lastname');
        $user -> name = $request->input('name');
        $user -> gender_id = $request->input('gender_id');
        $user -> email = $request->input('email');
        $user -> password = $request->input('password');
        $user -> country_id = $request->input('country_id');
        $user -> city = $request->input('city');
        $user -> postal = $request->input('postal');
        $user -> adress = $request->input('adress');
        $user -> number = $request->input('number');
        $user -> job = $request->input('job');
        $user -> save();
        $user->hobbies()->sync($request->hobby_id);
        return redirect()->route('users');
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
    public function edit(User $user)
    {
        return view('formedit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user -> lastname = $request->input('lastname');
        $user -> name = $request->input('name');
        $user -> gender_id = $request->input('gender_id');
        $user -> email = $request->input('email');
        $user -> password = $request->input('password');
        $user -> country_id = $request->input('country_id');
        $user -> city = $request->input('city');
        $user -> postal = $request->input('postal');
        $user -> adress = $request->input('adress');
        $user -> number = $request->input('number');
        $user -> job = $request->input('job');
        $user -> hobby = $request->input('hobby_id');
        $user -> update();
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users');
    }

}
