<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancemodelController extends Controller
{
    public function survey1(){
        return view("formulario1");
    }
    public function index(){
        return view("inicio");
    }

    public function create(){

    }

    public function show(){

    }
}
