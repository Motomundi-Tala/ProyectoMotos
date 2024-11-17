<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaFacturaController extends Controller
{
    public function index(){
        return view('cartafactura');
    }
}
