<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Event;

class SearchController extends Controller 
{
    public function search($event)
    {
        $techTypes = Event::where('name', 'like', '%'.$event.'%')->select('id', 'name', 'code_name', 'thumbnail', 'year')->get();
        return $techTypes;
    }
}
