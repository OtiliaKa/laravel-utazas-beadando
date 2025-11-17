<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helyseg;
use App\Models\Szalloda;
use App\Models\Tavasz;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function database()
    {
        $helysegek = Helyseg::all();
        $szallodak = Szalloda::with('helyseg')->get();
        $arak = Tavasz::with('szalloda')->get();

        return view('database', compact('helysegek', 'szallodak', 'arak'));
    }

    public function chart()
    {
        $szallodak = Szalloda::withCount('arak')->get();
        
        $labels = $szallodak->pluck('nev');
        $data = $szallodak->pluck('arak_count');

        return view('chart', compact('labels', 'data'));
    }

    public function crud()
    {
        $helysegek = Helyseg::all();
        return view('crud', compact('helysegek'));
    }
}