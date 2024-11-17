<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

     public function login(Request $request)
    {
        //Validar usuario y contraseÃ±a que se envia en la peticion
       // dd($request->all());

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

      //  dd ($credentials);

     // return redirect()->back()->with("error","usuario no valido");

        //Intento de inicio de sesion: attempt se encuentra en la clase SessionGuard
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $tipo_Usuario= $user->tipo_usuario;
           // $menu_Usuario= Menus::where('tipo',$tipo_Usuario)->orderBy('orden')->get();
           $menu_Usuario= DB::select("
           
                    SELECT 
                        m.Id AS menu_id,
                        m.orden,
                        m.foto_Fondo,
                        m.rutas AS menu_rutas,
                        m.tipo,
                        tm.Id AS titulo_id,
                        tm.titulo AS titulo_nombre,
                        tm.ruta AS titulo_ruta
                    FROM 
                        menus m
                    LEFT JOIN 
                        titulos_menu tm
                    ON 
                        m.titulo = tm.Id
                    WHERE m.tipo=:tipo

           ", ["tipo"=> $tipo_Usuario]);

         //  $menu_Usuario=null;
            if ($menu_Usuario==null){

                Auth::logout();

                return redirect()->route('welcome')->with("error","intente de nuevo");

            }
           
            $request->session()->put('menu_Usuario', $menu_Usuario);
           // dd($menu_Usuario);
           // dd($tipo_Usuario);
         //   dd('autentificado');
            $request->session()->regenerate();
            return redirect ('home')->with('status','You are logged in');
        }
        //mandamos el mensaje de error que se encuentra en el archivo resources/lang/en/auth.php
        // y que sera mostrado cerca del campo "username" de la vista
        return redirect()->back()->with("error","usuario o contraseña incorrecta");
    }
}
