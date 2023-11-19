<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class VendeurController extends Controller
{
    public function index()
    {
        return view('vendeur.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'slug' => ['string'],
        ]); 

        $slug =  Str::random(15).''.time().''.uniqid().Str::random(15);
      User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'vendeur',
            'password' => Hash::make($request->password),
            'slug' => $slug,
        ]);

        return redirect()->back();
    }

    
}
