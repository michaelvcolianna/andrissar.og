<?php

namespace App\Http\Controllers;

use App\Character;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;

class CharacterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(string $slug)
    {
        $user = User::where('name', $slug)->firstOrFail();
        $character = $user->character;

        return view('view', compact('character'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $character = \App\Character::find($id);
        $data = $request->all();
        $character->update($data);

        return response()
            ->json(null, Response::HTTP_OK);
    }
}
