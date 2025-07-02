<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class UserController extends Controller
{
    /*Crear nuevo usuario desde loguin*/
    public function newUser(Request $request){
        $email = $request->input('email');
        $consultaemail = DB::SELECT('SELECT * FROM users WHERE email = :varemail',['varemail' => $email]);
        $ultimo = DB::SELECT('SELECT * FROM users order by id desc limit 1');
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
    /*Cambio de contraseña*/
    public function changePassword(Request $request){
      $name = $request->input('name');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $password = $request->input('password');
      $phone = $request->input('phone');
      $birthdate = $request->input('birthdate');
      $gender = $request->input('gender');

      $contra_enccrip = bcrypt($password);

      if($password == ''){
        $update = DB::UPDATE('UPDATE users SET name = :varname, lastname = :varlastname, phone = :varphone, birthdate = :varbirthdate,
          gender = :vargender, password = :varpassword WHERE email = :varemail',['varname' => $name,'varlastname' => $lastname,'varphone' => $phone,'varbirthdate' => $birthdate,'vargender' => $gender,
          'varemail' => $email,'varpassword' => $contra_enccrip]);
      }else{
        $update = DB::UPDATE('UPDATE users SET name = :varname, lastname = :varlastname, phone = :varphone, birthdate = :varbirthdate,
          gender = :vargender, password = :varpassword WHERE email = :varemail',['varname' => $name,'varlastname' => $lastname,'varphone' => $phone,'varbirthdate' => $birthdate,'vargender' => $gender,
          'varemail' => $email,'varpassword' => $contra_enccrip]);
      }
      Auth::logout();

      Flash::success("Se ha actualizado el usuario con correo: " .$email. " de forma correcta");
      return redirect('/');
    }
}
