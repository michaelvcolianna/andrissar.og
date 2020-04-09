<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;

class CharacterController extends Controller
{
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
