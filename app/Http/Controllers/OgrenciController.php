<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TakipTablosu;
use App\Models\OgrenciSinavBasari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OgrenciController extends Controller
{
    public $kosulDizi = array();
    public function index()
    {
        return view('ogrenci', [
            "ruleSets" => array_values($this->ruleSets),
        ]);
    }

    public function oneriAl()
    {
        try {
            $temel_veriler = $this->temelVerileriGetir();
            $ogrenci_veri = $temel_veriler["ogrenci_veri"];

            $puan_tablosu = (new OgrenciSinavBasari())->getTable();
            $takip_tablosu = (new TakipTablosu())->getTable();

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
           
            /** Türlere göre ögrencinin takip oranlarının hesapları @return $takip_oranlari */           
                $ogrenci_video_takip = $ogrenci_veri["video_takip"];
                $ogrenci_ses_takip = $ogrenci_veri["ses_takip"];
                $ogrenci_metin_takip = $ogrenci_veri["metin_takip"];
                $ogrenci_swf_takip = $ogrenci_veri["swf_takip"];

                $video_oran = round($ogrenci_video_takip/$toplamTakip["video_toplam"],3);
                $ses_oran = round($ogrenci_ses_takip/$toplamTakip["ses_toplam"],3);
                $metin_oran = round($ogrenci_metin_takip/$toplamTakip["metin_toplam"],3);
                $swf_oran = round($ogrenci_swf_takip/$toplamTakip["swf_toplam"],3);
            /*##################################################################*/

            /** Kural setlerimizi döngüye alıp yönlenmeler yapılmaktadır */
                $ortalamaninUstundeMi=false;
                $ogrenci_takip_oranlari = array(
                    "video_takip" => $video_oran,
                    "ses_takip"   => $ses_oran,
                    "metin_takip" => $metin_oran,
                    "swf_takip"   => $swf_oran
                );

                $params = array(
                    "kural_seti" => $this->ruleSets,
                    "basari_puani" => $temel_veriler["basari_puani"],
                    "ogrenci_takip_oranlari" => $ogrenci_takip_oranlari
                );
 
                $dizi = $this->c5_algoritmasini_uygula($params);
            /*##################################################################*/

            /** Sınava giren ogrenci sayısı ve ortalama puanın bulunması */
                $toplamOrtalama = OgrenciSinavBasari::select(DB::raw("
                    COUNT($puan_tablosu.kid) as ogrenci_sayisi,AVG($puan_tablosu.basari_puani) as ortalama_puan
                "))
                ->get();
                
                $toplam_ortalama_degerler = $toplamOrtalama[0];
            /**######################################################## */
            
            $oneri = "";
            if(isset($dizi) && count($dizi)){
                $oneri.="Sınavlarınıza çalışırken ";
                $tavsiyeSayi=0;
                foreach($dizi as $key => $value){
                    if($value=="video_takip"){
                        if($tavsiyeSayi>0){
                            $oneri.=",";
                        }

                        $oneri.="video içeriklerinden";
                        $tavsiyeSayi++;
                    }

                    if($value=="ses_takip") {
                        if($tavsiyeSayi>0){
                            $oneri.=",";
                        }
                        $oneri.="ses dosyalarından";
                        $tavsiyeSayi++;
                    }

                    if($value=="metin_takip") {
                        if($tavsiyeSayi>0){
                            $oneri.=",";
                        }
                        $oneri.="metin dosyalarından";
                        $tavsiyeSayi++;
                    }

                    if($value=="swf_takip") {
                        if($tavsiyeSayi>0){
                            $oneri.=",";
                        }
                        $oneri.="swf dosyalarından faydalanarak, internet ortamındaki basit uygulamalar ve animasyonların uygulamasını yaparak";
                        $tavsiyeSayi++;
                    }
                }

                $oneri.=" sınavlarınıza hazırlanırsanız başarınız artacaktır. İyi çalışmalar dileriz..";
            } else {
                $ortalamaninUstundeMi=true;
            }

            /** Return edilecek veriler bir dizide tutmaktayız */
                $sonucOneriler = array(
                    "ogrenci_veri" => $ogrenci_veri,
                    "takip_oranlar" => $ogrenci_takip_oranlari,
                    "ogrenci_sayisi" => $toplam_ortalama_degerler["ogrenci_sayisi"],
                    "ortalama_puan"  => $toplam_ortalama_degerler["ortalama_puan"],
                    "ortalamaninUstundeMi" => $ortalamaninUstundeMi,
                    "dizi" => $dizi
                );
            /*##################################################################*/

            return response()->json([
                "durum" => true,
                "mesaj" => "Detaylar başarıyla getirildi.",
                "sonucOneriler" => $sonucOneriler,
                "kuralSetleri" => $this->ruleSets,
                "oneriler"  => $oneri
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

    public function c5_algoritmasini_uygula($params)
    {
        try 
        {
            $basari_puani = $params["basari_puani"];
            $takip_veri = $params["ogrenci_takip_oranlari"];

            $video_takip = $takip_veri["video_takip"];
            $ses_takip = $takip_veri["ses_takip"];
            $metin_takip = $takip_veri["metin_takip"];
            $swf_takip = $takip_veri["swf_takip"];

            foreach($params["kural_seti"] as $key => $value){
                $mode=$key;
                $v_node = $value["node"];
                $v_video_takip = (isset($value["video_takip"]) && $value["video_takip"]) ? $value["video_takip"] : null;
                $v_ses_takip = (isset($value["ses_takip"]) && $value["ses_takip"]) ? $value["ses_takip"] : null;
                $v_metin_takip = (isset($value["metin_takip"]) && $value["metin_takip"]) ? $value["metin_takip"] : null;
                $v_swf_takip = (isset($value["swf_takip"]) && $value["swf_takip"]) ? $value["swf_takip"] : null;
                
                $operator = $value["operator"];

                if($mode >= $basari_puani){
                    /** Yönlenme bu yönde devam edecektir */
                    if(isset($v_video_takip)) {
                        $condition_video = eval("return ". $video_takip.$operator.$v_video_takip.";");
                        if($condition_video){
                            /** Ögrencinin takip oranı kosulu saglıyorsa o dal üzerinden diger dala gecilir */
                            $params["kural_seti"] = $v_node; 
                            $this->c5_algoritmasini_uygula($params);
                        } else {
                            /** Ögrenci takip oranı kosulunu saglamıyorsa ve modu yüksek olan dalda olduğumuzdan 
                             * tavsiye verebilmek icin kosulu dizimize attık
                             */
                          
                            array_push($this->kosulDizi,"video_takip");
                        }
                    }
                    
                    if(isset($v_ses_takip)) {
                        $condition_ses = eval("return ". $ses_takip.$operator.$v_ses_takip.";");
                        if($condition_ses){
                            /** Ögrencinin takip oranı kosulu saglıyorsa o dal üzerinden diger dala gecilir */
                            $params["kural_seti"] = $value["node"]; 
                            $this->c5_algoritmasini_uygula($params);
                        } else {
                            /** Ögrenci takip oranı kosulunu saglamıyorsa ve modu yüksek olan dalda olduğumuzdan 
                             * tavsiye verebilmek icin kosulu dizimize attık
                             */
                           
                            array_push($this->kosulDizi,"ses_takip");
                        }
                    }

                    if(isset($v_metin_takip)) {
                        $condition_metin = eval("return ". $metin_takip.$operator.$v_metin_takip.";");
                        if($condition_metin){
                            /** Ögrencinin takip oranı kosulu saglıyorsa o dal üzerinden diger dala gecilir */
                            $params["kural_seti"] = $value["node"];
                            $this->c5_algoritmasini_uygula($params);
                        } else {
                            /** Ögrenci takip oranı kosulunu saglamıyorsa ve modu yüksek olan dalda olduğumuzdan 
                             * tavsiye verebilmek icin kosulu dizimize attık
                             */
                            array_push($this->kosulDizi,"metin_takip");
                        }
                    }

                    
                    if(isset($v_swf_takip)) {
                        
                        //array_push($this->kosulDizi,$key.($swf_takip.$operator.$v_swf_takip));
                        $condition_swf = eval("return ". $swf_takip.$operator.$v_swf_takip.";");
                        if($condition_swf){
                            /** Ögrencinin takip oranı kosulu saglıyorsa o dal üzerinden diger dala gecilir */ 
                            $params["kural_seti"] = $value["node"];  
                         
                            $this->c5_algoritmasini_uygula($params);
                        } else {
                            /** Ögrenci takip oranı kosulunu saglamıyorsa ve modu yüksek olan dalda olduğumuzdan 
                             * tavsiye verebilmek icin kosulu dizimize attık
                             */
                           
                            array_push($this->kosulDizi,"swf_takip");
                        }
                    } 
                } 
            }

            return $this->kosulDizi;
        }
        catch (\Exception $ex) {
            return response()->json([
                "durum" => false,
                "mesaj" => "C5 algoritması uygulanırken hata oluştu",
                "hata" => $ex->getMessage(),
                "satir" => $ex->getLine(),
            ], 500);
        }
    }
}
