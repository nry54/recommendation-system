<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Kullanicilar;
use App\Models\OgrenciSinavBasari;
use App\Models\TakipTablosu;
use App\Models\Sinav;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $kosulDizi = array();

    protected $ruleSets = [
        "282.5" => array(
            'swf_takip'=>'0.500',
            'operator' => '<=',
            "node"  => array(
                '130.05' => array(
                    "ses_takip"=>"1.500",
                    "operator" => '<=',
                    "node"  => array(
                        '130.05' => array(
                            "metin_takip" => "1.500",
                            "operator" => '<=',
                            "node"  => array(
                                '145.08' => array(
                                    "ses_takip" => "0.500",
                                    "operator" => "<=",
                                    "node"  => array(
                                        '158.98' => array(
                                            'video_takip'=>'4',
                                            "operator" => '<='
                                        ),
                                        '145.08' => array(
                                            'video_takip' => '4',
                                            "operator" => '>'
                                        ),
                                        '145.08' => array(
                                            'video_takip' => '7',
                                            "operator" => '<='
                                        ),
                                        '206.77' => array(
                                            'video_takip'=>'7',
                                            "operator" => '<='
                                        )
                                    )
                                ),
                                '135.05' => array(
                                    "ses_takip"=>"0.500",
                                    "operator" => ">"
                                )
                            )
                        ),
                        '145.18' => array(
                            "metin_takip"=>"1.500",
                            "operator" => ">",
                            "node"  => array(
                                '145.18' => array(
                                    'video_takip '=>'3',
                                    "operator" => '<=',
                                    "node"  => array(
                                        '145.18' => array(
                                            'video_takip '=>'0.500',
                                            "operator" => '<=',
                                        ),
                                        '267.3' => array(
                                            'video_takip'=>'0.500',
                                            "operator" => '>',
                                        )
                                    )
                                ),
                                '199.6' => array(
                                    'video_takip' =>'3',
                                    "operator" => '>',
                                    "node" => array(
                                        '199.6' => array(
                                            'video_takip '=>'5',
                                            "operator" => '<=',
                                        ),
                                        '220.9' => array(
                                            'video_takip'=>'5',
                                            "operator" => '>',
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
                '282.5' => array(
                    "ses_takip"=>"1.500",
                    "operator" => '>',
                    "node"  => array(
                        '110' => array(
                            'ses_takip'=>'3.500',
                            "operator" => '<=',
                            "node"  => array(
                                '110' => array(
                                    'ses_takip'=>'<=2.500',
                                    "operator" => '<=',
                                    "node"  => array(
                                        '110' => array(
                                            'metin_takip'=>'2.500',
                                            "operator" => '<=',
                                        ),
                                        '207.1' => array(
                                            'metin_takip'=>'2.500',
                                            "operator" => '>',
                                        ),
                                    )
                                ),
                                '176.1' => array(
                                    'ses_takip'=>'2.500',
                                    "operator" => '>',
                                    "node"  => array(
                                        '176.1' => array(
                                            'video_takip'=>'1.500',
                                            "operator" => '<=',
                                        ),
                                        '194.15' => array(
                                            'video_takip'=>'1.500',
                                            "operator" => '>',
                                        )
                                    )
                                )
                            )
                        ),
                        '282.5' => array(
                            'ses_takip'=>'3.500',
                            "operator" => '>',
                            "node"  => array(
                                '192.55' => array(
                                    'ses_takip'=>'4.500',
                                    "operator" => '<=',
                                    "node"  => array(
                                        '192.55' => array(
                                            'metin_takip'=>'1',
                                            "operator" => '<='
                                        ),
                                        '247.2' => array(
                                            'metin_takip'=>'1',
                                            "operator" => '>',
                                        )
                                    )
                                ),
                                '282.5' => array(
                                    'ses_takip'=>'4.500',
                                    "operator" => '>',
                                    "node"  => array(
                                        '282.5' => array(
                                            'ses_takip'=>'7',
                                            "operator" => '<=',
                                            "node"  => array(
                                                '282.5' => array(
                                                    'video_takip'=>'3.500',
                                                    "operator" => '<=',
                                                ),
                                                '217.7' => array(
                                                    'video_takip'=>'3.500',
                                                    "operator" => '>',
                                                )
                                            )
                                        ),
                                        '196' => array(
                                            'ses_takip'=>'7',
                                            "operator" => '>',
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        ),
        "239.1" => array(
            "swf_takip"=>"0.500",
            "operator" => ">",
            "node"  => array(
                "239.1" => array(
                    'swf_takip'=>'2.500',
                    "operator" => '<=',
                    "node"  => array(
                        "239.1" => array(
                            'swf_takip'=>'1.500',
                            "operator" => '<=',
                            "node" => array(
                                "189.45" => array(
                                    'video_takip'=>'1.500',
                                    "operator" => '<=',
                                    "node"  => array(
                                        "189.45" => array(
                                            'ses_takip'=>'3',
                                            "operator" => '<=',
                                            "node"  => array(
                                                "202.28" => array(
                                                    'ses_takip'=>'1',
                                                    "operator" => '<=',
                                                ),
                                                "189.45" => array(
                                                    'ses_takip'=>'1',
                                                    "operator" => '>',
                                                ),
                                            )
                                        ),
                                        "193.77" => array(
                                            'ses_takip'=>'3',
                                            "operator" => '>',
                                            "node"  => array(
                                                "193.77" => array(
                                                    'ses_takip'=>'5',
                                                    "operator" => '<=',
                                                ),
                                                "230.17" => array(
                                                    'ses_takip'=>'5',
                                                    "operator" => '>',
                                                ),
                                            )
                                        )
                                    )
                                ),
                                "239.1" => array(
                                    'video_takip'=>'1.500',
                                    "operator" => '>',
                                    "239.1" => array(
                                        'ses_takip'=>'2.500',
                                        "operator" => '<=',
                                        "235.55" => array(
                                            'metin_takip'=>'3',
                                            "operator" => '<=',
                                        ),
                                        "239.1" => array(
                                            'metin_takip'=>'3',
                                            "operator" => '>',
                                        )
                                    ),
                                    "202.3" => array(
                                        'ses_takip'=>'2.500',
                                        "operator" => '>',
                                    )
                                )
                            )
                        ),
                        "169.22" => array(
                            'swf_takip'=>'1.500',
                            "operator" => '>',
                            "169.22" => array(
                                'ses_takip'=>'0.500',
                                "operator" => '<=',
                                "169.22" => array(
                                    'video_takip'=>'2',
                                    "operator" => '<=',
                                ),
                                "257.37" => array(
                                    'video_takip'=>'2',
                                    "operator" => '>',
                                )
                            ),
                            "197.12" => array(
                                'ses_takip'=>'0.500',
                                "operator" => '>',
                                "197.12" => array(
                                    'metin_takip'=>'1.500',
                                    "operator" => '<=',
                                    "197.12" => array(
                                        'video_takip'=>'2.500',
                                        "operator" => '<=',
                                    ),
                                    "216.22" => array(
                                        'video_takip'=>'2.500',
                                        "operator" => '>',
                                    ),
                                ),
                                "238.03" => array(
                                    'metin_takip'=>'1.500',
                                    "operator" => '>',
                                )
                            )
                        )
                    )
                ),
                "114.85" => array(
                    'swf_takip'=>'2.500',
                    "operator" => '>',
                    "node"  => array(
                        "114.85" => array(
                            'video_takip'=>'3',
                            "operator" => '<=',
                            "node"  => array(
                                "114.85" => array(
                                    'ses_takip'=>'1.500',
                                    "operator" => '<=',
                                    "node"  => array(
                                        "114.85" => array(
                                            'metin_takip'=>'1',
                                            "operator" => '<=',
                                        ),
                                        "229.05" => array(
                                            'metin_takip'=>'1',
                                            "operator" => '>',
                                        ),
                                    )
                                ),
                                "138.33" => array(
                                    'ses_takip'=>'1.500',
                                    "operator" => '>',
                                    "138.33" => array(
                                        'ses_takip'=>'2.500',
                                        "operator" => '<=',
                                        "138.33" => array(
                                            'video_takip'=>'0.500',
                                            "operator" => '<=',
                                        ),
                                        "251.5" => array(
                                            'video_takip'=>'0.500',
                                            "operator" => '>',
                                        ),
                                    ),
                                    "218.42" => array(
                                        'ses_takip'=>'2.500',
                                        "operator" => '>',
                                    )
                                )
                            )
                        ),
                        "235.75" => array(
                            'video_takip'=>'3',
                            "operator" => '>',
                            "node"  => array(
                                "235.75" => array(
                                    'swf_takip'=>'6',
                                    "operator" => '<=',
                                    "node"  => array(
                                        "235.75" => array(
                                            'swf_takip'=>'3.500',
                                            "operator" => '<=',
                                        ),
                                        "286.05" => array(
                                            'swf_takip'=>'3.500',
                                            "operator" => '>',
                                            "node"  => array(
                                                "286.05" => array(
                                                    'ses_takip'=>'5',
                                                    "operator" => '<=',
                                                ),
                                                "295.27" => array(
                                                    'ses_takip'=>'5',
                                                    "operator" => '>',
                                                )
                                            )
                                        ),
                                    )
                                ),
                                "302.95" => array(
                                    'swf_takip'=>'6',
                                    "operator" => '>',
                                    "node"  => array(
                                        "302.95" => array(
                                            'video_takip'=>'7.500',
                                            "operator" => '<=',
                                        ),
                                        "335.52" => array(
                                            'video_takip'=>'7.500',
                                            "operator" => '>',
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )              
    ];

    public function temelVerileriGetir() 
    {
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

        return [
            'ogrenci_veri' => $ogrenci_veri,
            'basari_puani' => $basari_puani
        ];
    }

    public function ogrenciBilgileriniGetir()
    {
        try
        {
            $kullanicilar = (new Kullanicilar())->getTable();
            $sinavBasari = (new OgrenciSinavBasari())->getTable();
            $takip_tablosu = (new TakipTablosu())->getTable();
            
            $ogrenciListesi = Kullanicilar::select(DB::raw("
                $kullanicilar.kullanici_id,
                $kullanicilar.ad,
                $kullanicilar.soyad,
                $sinavBasari.basari_puani,
                $takip_tablosu.video_takip,
                $takip_tablosu.ses_takip,
                $takip_tablosu.metin_takip,
                $takip_tablosu.swf_takip
            "))
            ->join($sinavBasari, $sinavBasari . '.kid', '=', $kullanicilar . '.kullanici_id')
            ->join($takip_tablosu, $takip_tablosu . '.kid', '=', $kullanicilar . '.kullanici_id')
            ->get();

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

            foreach($ogrenciListesi as $key => $ogrenci){
                /** Türlere göre ögrencinin takip oranlarının hesapları @return $takip_oranlari */           
                    $ogrenci_video_takip = $ogrenci["video_takip"];
                    $ogrenci_ses_takip = $ogrenci["ses_takip"];
                    $ogrenci_metin_takip = $ogrenci["metin_takip"];
                    $ogrenci_swf_takip = $ogrenci["swf_takip"];
    
                    $video_oran = round($ogrenci_video_takip/$toplamTakip["video_toplam"],3);
                    $ses_oran = round($ogrenci_ses_takip/$toplamTakip["ses_toplam"],3);
                    $metin_oran = round($ogrenci_metin_takip/$toplamTakip["metin_toplam"],3);
                    $swf_oran = round($ogrenci_swf_takip/$toplamTakip["swf_toplam"],3);
                /*##################################################################*/

                $ogrenci_takip_oranlari = array(
                    "video_takip" => $video_oran,
                    "ses_takip"   => $ses_oran,
                    "metin_takip" => $metin_oran,
                    "swf_takip"   => $swf_oran
                );

                $params = array(
                    "kural_seti" => $this->ruleSets,
                    "basari_puani" => $ogrenci["basari_puani"],
                    "ogrenci_takip_oranlari" => $ogrenci_takip_oranlari
                );
 
                if(!isset($dizi[$ogrenci["kullanici_id"]]))
                {
                    $dizi[$ogrenci["kullanici_id"]] = array();
                }
                
                $dizi[$ogrenci["kullanici_id"]] = $this->c5_algoritmasini_uygula($params);

                $takipler = array ("video_takip" => $ogrenci_video_takip, 
                                    "ses_takip" => $ogrenci_ses_takip, 
                                    "metin_takip" => $ogrenci_metin_takip,
                                    "swf_takip" => $ogrenci_swf_takip);

                $max_takip[$ogrenci["kullanici_id"]] = array_search(max($takipler),$takipler);
            }

            return [
                "dizi" => $dizi,
                "max_takip" => $max_takip,
                "ogrenciListesi" => $ogrenciListesi
            ];
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
                            if (!in_array("Görsel", $this->kosulDizi))
                            {
                                array_push($this->kosulDizi,"Görsel");
                            }
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
                            if (!in_array("İşitsel", $this->kosulDizi))
                            {
                                array_push($this->kosulDizi,"İşitsel");
                            }
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
                            if (!in_array("Okuma/Yazma", $this->kosulDizi))
                            {
                                array_push($this->kosulDizi,"Okuma/Yazma");
                            }
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
                           
                             if (!in_array("Kinestetik", $this->kosulDizi))
                             {
                                array_push($this->kosulDizi,"Kinestetik");
                             }
                        }
                    } 
                } 
            }

            return implode(',',$this->kosulDizi);
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
