<?php

namespace App\Http\Controllers;

use App\Models\Helyseg;
use Illuminate\Http\Request;

class HelysegController extends Controller
{
    public function index()
    {
        $helysegek = Helyseg::all();
        return view('crud', compact('helysegek'));
    }

    public function create()
    {
        return view('helyseg_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'az' => 'required|integer|unique:helyseg,az',
            'nev' => 'required|string|max:255',
            'orszag' => 'required|string|max:255'
        ]);

        Helyseg::create($request->all());

        return redirect()->route('crud.index')
            ->with('success', 'Helység sikeresen létrehozva!');
    }

    public function edit($az)
    {
        $helyseg = Helyseg::where('az', $az)->firstOrFail();
        return view('helyseg_edit', compact('helyseg'));
    }

    public function update(Request $request, $az)
    {
        $helyseg = Helyseg::where('az', $az)->firstOrFail();
        
        $request->validate([
            'nev' => 'required|string|max:255',
            'orszag' => 'required|string|max:255'
        ]);

        $helyseg->update([
            'nev' => $request->nev,
            'orszag' => $request->orszag
        ]);

        return redirect()->route('crud.index')
            ->with('success', 'Helység sikeresen frissítve!');
    }

    public function destroy($az)
    {
        $helyseg = Helyseg::where('az', $az)->firstOrFail();
        $helyseg->delete();

        return redirect()->route('crud.index')
            ->with('success', 'Helység sikeresen törölve!');
    }
}