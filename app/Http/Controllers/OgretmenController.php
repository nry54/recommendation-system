<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OgretmenController extends Controller
{
    public function index()
    {
        return view("ogretmen");
    }
}
