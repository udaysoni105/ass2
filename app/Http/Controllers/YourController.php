<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class YourController extends Controller
{
    public function store()
    {
        // Retrieve the data you want to display
        $users = User::all(); // Assuming you have a User model
        
        // Pass the data to the view
        return view('store', ['users' => $users]);
    }
}
