<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class UserController extends Controller
{
    /*Crear nuevo usuario desde loguin*/
    public function newUser(Request $request){
        $email = $request->input('email'); 
        $consultaemail = DB::SELECT('SELECT * FROM Users WHERE email = :varemail',['varemail' => $email]);
        $ultimo = DB::SELECT('SELECT * FROM Users order by id desc limit 1');
        foreach ($ultimo as $ult){
            $ultimoid=$ult->id;
        }
        if($consultaemail == false){
	        $u = new User();
	        if($ultimo == null){
	        	$u->id = 1;
	        }else{
	        	$u->id = $ultimoid+1;
	        }
	        $u->name = $request->input('name');
	        $u->lastname = $request->input('lastname');
	        $u->email = $request->input('email');  
	        $u->birthdate = $request->input('birthdate');
	        $u->phone = $request->input('phone');       
	        $u->password = bcrypt($request->input('password'));
	        $u->gender = $request->input('gender');
	        $u->save();
	        Flash::success("Se ha registrado el usuario con correo: " .$u->email." de forma correcta");
	        return back();
        }else{
            Flash::error("El email: ".$email." ya se encuentra  registrado");
            return back();
        }
    }
}


