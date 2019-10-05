<?php

namespace App\Http\Controllers\Page;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class
HomepageController extends Controller
{
    public function index(){

        $data = Data::all();
        return view('page.home', compact('data'));
    }

    public function store(Request $request){
        $latitud = $request->input('txt_latitud');
        $longitud = $request->input('txt_longitud');

        $data = new Data();
        $data->latitud = $request->input('txt_latitud');
        $data->longitud = $request->input('txt_longitud');
        $data->save();

//        return redirect(route('home_path'));
    }
}
