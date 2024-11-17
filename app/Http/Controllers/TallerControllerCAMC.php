<?php
namespace App\Http\Controllers;

class TallerControllerCAMC
{

    public function __invoke()
    {
        
        return view("taller",["posts"=> $_POST]);
       
    }
}