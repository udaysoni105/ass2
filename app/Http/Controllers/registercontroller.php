<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class registercontroller extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'city' => 'required',
    ], [
        'name.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'email.email' => 'Please enter a valid email address.',
        'address.required' => 'The address field is required.',
        'city.required' => 'The city field is required.',
    ]);
    
    $customer = new Customers;
    $customer->name = $validatedData['name'];
    $customer->email = $validatedData['email'];
    $customer->address = $validatedData['address'];
    $customer->city = $validatedData['city'];
    $customer->save();
    
    return "Registration successful!";
}
}


