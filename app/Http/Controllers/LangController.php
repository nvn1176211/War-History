<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LangController extends Controller 
{
    public function change(Request $request)
    {
        if (! in_array($request->lang, ['en', 'vi'])) {
            abort(400);
        }
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
