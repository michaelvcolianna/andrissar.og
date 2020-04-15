<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $character = Character::firstOrCreate(['user_id' => auth()->user()->id]);

        return view('home', compact('character'));
    }
}
