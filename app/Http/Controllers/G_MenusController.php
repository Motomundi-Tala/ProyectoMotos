<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\G_Menus;

class G_MenusController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la tabla `menus`
        $menus = G_Menus::all();

        // Pasar los datos a la vista
       // return view('G__Menus', compact('menus'));
        return view('G__Menus')->with('menus',$menus);
    }
}
