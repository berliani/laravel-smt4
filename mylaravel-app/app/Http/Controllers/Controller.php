<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
     function index(){
        // return "Halo, dunia!";
        // return "user";
        return view('user', [
        'name' => 'James', 
        'year' => 2000]);
    }
}
