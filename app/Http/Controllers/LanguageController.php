<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function Thai(){
        Session::put('language','thai');
        return redirect()->back();

    }

    public function English(){
        Session::put('language','english');
        return redirect()->back();

    }
}
