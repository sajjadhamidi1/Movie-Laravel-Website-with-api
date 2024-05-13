<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvshowController extends Controller
{
    public function index()
    {
        $token='eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjBlNTE4Y2FhMTZjMDAwNmI1N2VlZWM3MTQxMTYyOCIsInN1YiI6IjY2M2RiOGVhYjJlYTI4ZjAxNWYxYWQ4MyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.3yE95CWJBVAxZEEjOzndQoNPfKEP1GV0rHZD-xxyf3o';
        $url='https://api.themoviedb.org/3/tv/popular?language=en-US&page=1';
        $response = Http::withToken($token)->get($url);


        if ($response->successful()) {
            $tvshows = $response->json();
            return view('tvshows.index',compact('tvshows'));
        } else {

            return back()->withError('Failed to fetch data from API.');
        }
    }


    public function show($id)
    {
        $token='eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjBlNTE4Y2FhMTZjMDAwNmI1N2VlZWM3MTQxMTYyOCIsInN1YiI6IjY2M2RiOGVhYjJlYTI4ZjAxNWYxYWQ4MyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.3yE95CWJBVAxZEEjOzndQoNPfKEP1GV0rHZD-xxyf3o';
        $url = 'https://api.themoviedb.org/3/tv/' . $id . '?language=en-US';
        $response = Http::withToken($token)->get($url);
        if ($response->successful()) {
            $tvshow = $response->json();
            return view('Tvshows\show',compact('tvshow'));
        } else {

            return back()->withError('Failed to fetch data from API.');
        }
    }

}
