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
        // Individual user sheets
        $character = Character::firstOrCreate(['user_id' => auth()->user()->id]);

        if(auth()->user()->id == 1)
        {
            if(!request()->has('edit') && !request()->has('char'))
            {
                // DM screen: All characters
                $characters = Character::orderBy('order')->get();

                return view('dm', compact('characters'));
            }

            if(request()->has('char'))
            {
                $character = Character::find(request()->char);
            }
        }

        return view('home', compact('character'));
    }
}
