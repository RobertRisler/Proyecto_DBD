<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index(Request $request){
        return view('auth/login');
    }


    public function username(){
        return 'correo';
    }


        public function authenticate(Request $request)
    {
        $this->validate($request, [
            'correo' => 'required|email',
            'contrasena' => 'required|string|min:8'
        ]);

        $correo = $request->get('correo');
        $contrasena = $request->get('contrasena');
        $credenciales = array('correo' => $correo, 'contrasena' => $contrasena);
        $userData = User::where('correo', $correo)->first();
        if($userData != NULL){
            if (Auth::attempt($credenciales)) {
                
                return redirect('/hom')->with('error', 'Ingreso correcto!');/*Momentaneamente, para deslogear*/
            }
            else{
                return back()->with('error', 'Error: Correo o Contraseña incorrecta'); 
            }
          
        }
        else{
          
          return back()->with('error', 'Error: Debe ingresar Correo y contraseña'); 
        }
    }



    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
