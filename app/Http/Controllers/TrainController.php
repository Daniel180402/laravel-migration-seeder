<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = train::paginate(9);
        return view('trains.index', ["trains" => $trains]);
    }
}
