<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// ESTO ES UNA PRUEBA
class ApiController extends Controller
{
    public function index(){
        $chars=Http::get("https://fakestoreapi.com/products");
        // return json_decode($chars);

        // return view("prueba",[
        //     "chars"=>json_decode($chars)
        // ]);
        $charsArray=$chars->json();
        return view('prueba',compact('charsArray'));
    }
}
