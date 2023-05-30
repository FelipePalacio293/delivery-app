<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function checkRain()
    {
        $city = "Cali";
        $country = "CO";

        $response = Http::get('http://api.openweathermap.org/data/2.5/weather', [
            'q' => $city . ',' . $country,
            'appid' => '',
        ]);

        $data = $response->json();
        $willRain = false;
        if(isset($data['weather'][0]['main']) && $data['weather'][0]['main'] === "Rain") {
            $willRain = true;
        }

        return view('weather', ['willRain' => $willRain]);
    }
}
