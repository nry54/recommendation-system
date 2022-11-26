<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kullanicilar;
use App\Models\TakipTablosu;
use App\Models\Sinav;
use App\Models\OgrenciSinavBasari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OgrenciController extends Controller
{
    public function index()
    {
        return view('ogrenci', [
            "ruleSets" => array_values($this->ruleSets),
        ]);
    }

    public function oneriAl()
    {
        try {
            $kullanici = Kullanicilar::where("username", auth()->user()->username)
            ->first();

            if (!$kullanici)
            {
                return response()->json([
                    "durum" => false,
                    "mesaj" => "Kullanıcı bulunamadı maalesef :(",
                ], 500);
            }

            $puan_tablosu = (new OgrenciSinavBasari())->getTable();
            $takip_tablosu = (new TakipTablosu())->getTable();
            $sinav_tablosu = (new Sinav())->getTable();

            /** Toplam takip sayılarını getiren kod blokları @return $toplam_takip_verileri */
                $toplamTakipler = TakipTablosu::select(DB::raw("
                    SUM($takip_tablosu.video_takip) as video_toplam,
                    SUM($takip_tablosu.ses_takip) as ses_toplam,
                    SUM($takip_tablosu.metin_takip) as metin_toplam,
                    SUM($takip_tablosu.swf_takip) as swf_toplam
                "))
                ->get();
                $toplamTakip = $toplamTakipler[0];
            /*##################################################################*/
           
            /* Kullanıcı takip ve sınav verilerini getiren kod blokları @return $takip_verileri */
                $kullaniciTakipleri = OgrenciSinavBasari::select(DB::raw("
                    $puan_tablosu.basari_puani,
                    $takip_tablosu.video_takip,
                    $takip_tablosu.ses_takip,
                    $takip_tablosu.metin_takip,
                    $takip_tablosu.swf_takip,
                    $sinav_tablosu.ad,
                    $sinav_tablosu.kod
                "))
                ->join($takip_tablosu, $takip_tablosu . '.kid', '=', $puan_tablosu . '.kid')
                ->join($sinav_tablosu, $sinav_tablosu . '.sinav_id', '=', $puan_tablosu . '.sinav_id')
                ->where("$puan_tablosu.kid", $kullanici->kullanici_id)
                ->get();
                
                $ogrenci_veri = $kullaniciTakipleri[0];
                $basari_puani = $ogrenci_veri["basari_puani"];
            /*##################################################################*/
        

            /** Türlere göre ögrencinin takip oranlarının hesapları @return $takip_oranlari */
                $video_oran = round($ogrenci_veri["video_takip"]/$toplamTakip["video_toplam"],3);
                $ses_oran = round($ogrenci_veri["ses_takip"]/$toplamTakip["ses_toplam"],3);
                $metin_oran = round($ogrenci_veri["metin_takip"]/$toplamTakip["metin_toplam"],3);
                $swf_oran = round($ogrenci_veri["swf_takip"]/$toplamTakip["swf_toplam"],3);
            /*##################################################################*/

            /** Kural setlerimizi döngüye alıp yönlenmeler yapılmaktadır */
                $ortalamaninUstundeMi=false;
                foreach($this->ruleSets as $key => $value){
                    $mode=$value["mode"];
                    
                    if($mode >= $basari_puani){
                        /** Yönlenme bu yönde devam edecektir */
                    } else {
                        /** Ögrencinin basarılı olduguna dair mesaj verilir */
                        $ortalamaninUstundeMi=true;
                    }
                }
            /*##################################################################*/

            /** Return edilecek veriler bir dizide tutmaktayız */
                $sonucOneriler = array(
                    "ogrenci_veri" => $ogrenci_veri,
                    "takip_oranlar" => array(
                        "video_oran" => $video_oran,
                        "ses_oran" => $ses_oran,
                        "metin_oran" => $metin_oran,
                        "swf_oran" => $swf_oran
                    )
                );
            /*##################################################################*/
            return response()->json([
                "durum" => true,
                "mesaj" => "Detaylar başarıyla getirildi.",
                "sonucOneriler" => $sonucOneriler,
                "ortalamaninUstundeMi" => $ortalamaninUstundeMi,
                "kuralSetleri" => $this->ruleSets
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                "durum" => false,
                "mesaj" => "Öneri veremedim maalesef :(",
                "hata" => $ex->getMessage(),
                "satir" => $ex->getLine(),
            ], 500);
        }
    }
}
