<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    /*
     * 
     */
    public function consultarClima(Request $request){
        $client = new \GuzzleHttp\Client();
        $res = $client->request("GET", "$request->param2/weather?q=$request->param1&appid=$request->param3&units=$request->param4");
        $res = json_decode($res->getBody());
        // $res = collect(json_decode($res->getBody()));
        foreach ($res as $key => $value) {
            $val[] = $value;
        }

        return $val;
    }
}