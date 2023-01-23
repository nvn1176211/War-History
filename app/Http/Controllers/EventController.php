<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Event;
use File;
use Illuminate\Support\Facades\Response;

class EventController extends Controller 
{
    public function index($id)
    {
        $event = Event::find($id);
        return view('pages.event', ['event'=>$event]);
    }

    public function downloadImg($imgName)
    {
        $filepath = public_path('img/'.$imgName);
        return Response::download($filepath); 
    }
}
