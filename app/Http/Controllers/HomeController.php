<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buy;

class HomeController extends Controller
{
    public function index(){
        $data = Buy::find('1');
        return view('home.userpage', compact('data'));
    }

    public function redirect(){
        return redirect()->route('websitehome');
    }

}
