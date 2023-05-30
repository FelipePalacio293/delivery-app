<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Domicilio;


class MapaController extends Controller
{
    public function show(){
        $devices = Device::all();
        return view('map.index', ['devices' => $devices]);
    }

    public function showRoute($id){
        $domicilio = Domicilio::where('id', $id)->get();
        return view('map.routes', ['domicilios' => $domicilio]);
    }
}
