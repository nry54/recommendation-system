<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OgrenciController extends Controller
{
    public function index()
    {
        return view("ogrenci");
    }
}
