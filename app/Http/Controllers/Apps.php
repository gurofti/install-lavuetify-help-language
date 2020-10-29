<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Apps extends Controller
{
    public function index($dil) {
//        return test('control test');
        App::setLocale($dil);
        return view('home');
    }
}
