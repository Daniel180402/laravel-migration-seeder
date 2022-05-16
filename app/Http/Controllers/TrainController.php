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

    public function show($id){
        $train = train::findOrFail($id);
        return view('trains.show', ["train" => $train]);
    }
}
