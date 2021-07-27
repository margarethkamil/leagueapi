<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

        //ocultar llave
    public function searchData($summonerName){
        $apiKey = 'RGAPI-d14b594c-1f97-4711-964e-ddc318af840d';
        $url = 'https://la1.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$summonerName.'?api_key='.$apiKey;
        
        // $ch = curl_init($url); transferir información con sintaxis de URL
        $summonerName = json_decode(file_get_contents($url), true);
        // dd($summonerName);
        return view("search",["summonerName"=>$summonerName]);

    }

    // public function searchStats($id){ en proceso** para stats de lol 

    //     $url = 'https://la1.api.riotgames.com/lol/league/v4/entries/by-summoner/'.$id;
    //     $id = json_decode(file_get_contents($url), true);
    //     return view();
    // }

}