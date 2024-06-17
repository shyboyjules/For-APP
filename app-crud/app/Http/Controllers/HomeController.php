<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Food;


class HomeController extends Controller
{
    public function index(){
        $data=food::all();
        
        return view('admin.admindashboard', compact("data"));
    }


}
