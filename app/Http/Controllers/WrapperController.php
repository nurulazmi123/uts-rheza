<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function forward(){
        $json= Http::get('https://geocode.search.hereapi.com/v1/geocode?q=02965-140, Brasil&apiKey=15vXKGlsw7fcmWANUtpmhvqUF9YDlYuTbN-qPn5P9Ow')->json();
        return response()->json($json);
    }
    public function forwardw(){
        $json= Http::get('https://wse.ls.hereapi.com/2/findsequence.json?start=Berlin-Main-Station;52.52282,13.37011&destination1=East-Side-Gallery;52.50341,13.44429&destination2=Olympiastadion;52.51293,13.24021&end=HERE-Berlin-Campus;52.53066,13.38511&mode=fastest;car&apiKey=TIiNfmhUIWGq-nf8U9-5p6-xrGPn08pbYZpMVwRGdUo')->json();
        return response()->json($json);
    }
}
