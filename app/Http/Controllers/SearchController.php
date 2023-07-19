<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Search;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
    
        // Effectuer la recherche dans la base de données
        $users = User::where('name', 'LIKE', "%$search%")
                    ->orWhere('lastname', 'LIKE', "%$search%")
                    ->orWhere('job', 'LIKE', "%$search%")
                    ->orWhere('city', 'LIKE', "%$search%")
                    ->orWhere('number', 'LIKE', "%$search%")
                    ->orWhere('adress', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%")
                    ->get();
    
        return view('users', compact('users', 'search'));
    }
}    
