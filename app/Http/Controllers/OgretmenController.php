<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kullanicilar;
use App\Models\OgrenciSinavBasari;
use Illuminate\Support\Facades\DB;

class OgretmenController extends Controller
{
    public function index()
    {
        return view("ogretmen");
    }

    public function ogrenciListesiGetir()
    {
        try
        {
            $kullanicilar = (new Kullanicilar())->getTable();
            $sinavBasari = (new OgrenciSinavBasari())->getTable();
            
            $ogrenciListesi = Kullanicilar::select(DB::raw("
                $kullanicilar.ad,
                $kullanicilar.soyad,
                $sinavBasari.basari_puani
            "))
            ->join($sinavBasari, $sinavBasari . '.kid', '=', $kullanicilar . '.kullanici_id')
            ->get();

            return response()->json([
                "durum" => true,
                "mesaj" => "Öğrenci listesi başarıyla getirildi.",
                "ogrenciListesi" => $ogrenciListesi
            ], 200);
        }
        catch (\Exception $ex) {
                return response()->json([
                    "durum" => false,
                    "mesaj" => "Öğrenci listesi getirilemedi..",
                    "hata" => $ex->getMessage(),
                    "satir" => $ex->getLine(),
                ], 500);
            }
    }
}
