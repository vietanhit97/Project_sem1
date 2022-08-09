<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function url(){
        return view('rturl.blade.php');

    }
}
