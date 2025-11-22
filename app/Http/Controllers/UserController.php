<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)  {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:40', Rule::unique('users','name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:25']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/profil');
    }

        public function login(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $incomingFields['email'])->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Ez az e-mail cím nincs regisztrálva.']);
        }

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']]))  {
            $request->session()->regenerate();
            return redirect()->intended($request->redirect_to ?? '/profil');
        } else {
            return back()->withErrors(['password' => 'Hibás jelszó.']);
        }
        }

    public function logout(Request $request)    {
        auth()->logout();

        return redirect('/profil');
        }

    public function admin(Request $requet)  {
        if (auth())
        {

        }
    }
}