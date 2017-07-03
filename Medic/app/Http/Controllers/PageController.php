<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulo;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        dd('hola');
        
        return view('Site/Index');
    }

}
