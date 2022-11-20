<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kullanicilar;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->user())
        {
            return redirect()->to("/");
        }

        return view("login");
    }

    public function login(Request $request)
    {
        $kullanici = Kullanicilar::where("username", $request->username)
            ->where('password', $request->password)
            ->first();

        if (!$kullanici)
        {
            return response()->json([
                "durum" => false,
                "mesaj" => "Kullanıcı bulunamadı maalesef :(",
            ], 500);
        }
        
        
        auth()->login($kullanici);

        $request->session()->regenerate();
    
        $route_page = "/";
        if($kullanici->kullanici_turu == "OGRENCI")
        {
            $route_page = "/ogrenci";
        }
        else if($kullanici->kullanici_turu == "OGRETMEN")
        {
            $route_page = "/ogretmen";
        }

        return redirect($route_page);

    }

    public function destroy(Request $request)
    {
        $request->session()->invalidate();

        return $request->ajax()
            ? response()->json([
                "durum" => true,
                "url" => route('login'),
            ])
            : redirect('/');
    }
}
