<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    /*
     * Page d'accueil
     */
    public function accueil()
    {
        return view('accueil');
    }
}
