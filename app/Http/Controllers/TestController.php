<?php

namespace App\Http\Controllers;

use App\Models\Arac;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $araclar = Arac::all();
        foreach ($araclar as $item) {
            echo $item->plaka . ' => ' . $item->aracSinifi->sinif . "\n";
        }
    }
}
