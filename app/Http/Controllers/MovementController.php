<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movement;
use Auth;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $movements = DB::SELECT('SELECT * FROM MOVEMENTS WHERE id_user = :varuser Order By id DESC',['varuser'=>$user_id]);
        return $movements;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $monto = $request->input('rode');
        $consulta = DB::SELECT('SELECT total FROM MOVEMENTS WHERE id_user = :varid ORDER BY id DESC LIMIT 1',['varid' => $id]);
        foreach ($consulta as $ult){
            $ultimototal=$ult->total;
        }
        if( $consulta == false){
            $m = new Movement();
            $m->rode = $monto;
            $m->movement = $request->input('movement');
            $m->description = $request->input('description');
            $m->total = $request->input('rode');
            $m->id_user = $id;
            $m->save(); 
        }else{
            $m = new Movement();
            $m->rode = $request->input('rode');
            $m->movement = $request->input('movement');
            $m->description = $request->input('description');
            if($m->movement == 'sum'){
                $m->total = (double)$ultimototal+(double)$monto;
            }else{
                $m->total = (double)$ultimototal-(double)$monto;
            }
            $m->id_user = $id;
            $m->save(); 
        }

        $consultatotal = DB::SELECT('SELECT total FROM MOVEMENTS WHERE id_user = :varid ORDER BY id LIMIT 1',['varid' => $id]);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movement = Movement::findOrFail($id);
        //formulario
        return $movement;
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
        $movement = Movement::findOrFail($id);
        $movement->delete();
    }
}
