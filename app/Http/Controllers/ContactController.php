<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Kapcsolat oldal
    public function index()
    {
        return view('contact');
    }

    // Üzenet mentése
    public function store(Request $request)
    {
        // Szerver oldali validáció
        $validated = $request->validate([
            'message' => 'required|min:10',
        ]);

        // Mentés adatbázisba
        ContactMessage::create([
            'user_id' => auth()->id(),
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Üzeneted sikeresen elküldve!');
    }
}
