<?php

namespace App\Http\Controllers;

class SetLanguageController extends Controller
{
    public function __invoke(string $lang){
        var_dump($lang);
        session()->put("lang", $lang);
        app()->setLocale($lang);
        return redirect()->back();
    }
}
