<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
