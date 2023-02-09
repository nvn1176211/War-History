<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Support\Facades\App;

class HomeController extends Controller 
{
    public function index()
    {
        //12
        $events = Event::orderBy('year')->get();
        return view('index', [
            'events'=>$events,
        ]);
    }
}
