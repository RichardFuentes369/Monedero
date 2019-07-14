<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;
use Auth;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $movements = Movement::where('id_user','=',$user_id)->get();
        return $movements;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $this->validate($request, [
            'rode' => 'required',
            'movement' => 'required',
            'description' => 'required',
            'id_user' => $user_id,
        ]);

        //Movement::create($request->all());

        return $request;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movements = Movement::findOrFail($id);
        $movements->delete();
    }
}