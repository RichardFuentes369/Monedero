<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class LoginController extends Controller
{
    
    /*Iniciar Session*/
    public function login(Request $request){
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            $consulta = DB::SELECT('SELECT * FROM Users WHERE email = :varemail',['varemail' => $credentials['email']]);
            return back();    
        }else{
            return back()->withErrors(['email' => trans('auth.failed')])
                        ->withInput(request(['email']));
        }   
    }

    /*Cerrar Session*/
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
