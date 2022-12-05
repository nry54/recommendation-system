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

    protected $ruleSets = [
        "282.5" => array(
            'swf_takip'=>'<=0.500',
            "node"  => array(
                '130.05' => array(
                    "ses_takip"=>"<=1.500",
                    "node"  => array(
                        '130.05' => array(
                            "metin_takip" => "<=1.500",
                            "node"  => array(
                                '145.08' => array(
                                    "ses_takip" => "<=0.500",
                                    "node"  => array(
                                        '158.98' => array(
                                            'video_takip'=>'<=4',
                                        ),
                                        '145.08' => array(
                                            'video_takip' => '>4', 'video_takip' => '<=7'
                                        ),
                                        '206.77' => array(
                                            'video_takip'=>'<=7'
                                        )
                                    )
                                ),
                                '135.05' => array(
                                    "ses_takip"=>">0.500",
                                )
                            )
                        ),
                        '145.18' => array(
                            "metin_takip"=>" >1.500",
                            "node"  => array(
                                '145.18' => array(
                                    'video_takip '=>'<=3',
                                    "node"  => array(
                                        '145.18' => array(
                                            'video_takip '=>'<=0.500'
                                        ),
                                        '267.3' => array(
                                            'video_takip'=>' >0.500'
                                        )
                                    )
                                ),
                                '199.6' => array(
                                    'video_takip >3',
                                    "node" => array(
                                        '199.6' => array(
                                            'video_takip '=>'<=5'
                                        ),
                                        '220.9' => array(
                                            'video_takip'=>'>5'
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
                '282.5' => array(
                    "ses_takip"=>">1.500",
                    "node"  => array(
                        '110' => array(
                            'ses_takip'=>'<=3.500',
                            "node"  => array(
                                '110' => array(
                                    'ses_takip'=>'<=2.500',
                                    "node"  => array(
                                        '110' => array(
                                            'metin_takip'=>'<=2.500'
                                        ),
                                        '207.1' => array(
                                            'metin_takip'=>'>2.500'
                                        ),
                                    )
                                ),
                                '176.1' => array(
                                    'ses_takip'=>'>2.500',
                                    "node"  => array(
                                        '176.1' => array(
                                            'video_takip'=>'<=1.500'
                                        ),
                                        '194.15' => array(
                                            'video_takip'=>'>1.500'
                                        )
                                    )
                                )
                            )
                        ),
                        '282.5' => array(
                            'ses_takip'=>'>3.500',
                            "node"  => array(
                                '192.55' => array(
                                    'ses_takip'=>'<=4.500',
                                    "node"  => array(
                                        '192.55' => array(
                                            'metin_takip'=>'<=1'
                                        ),
                                        '247.2' => array(
                                            'metin_takip'=>'>1'
                                        )
                                    )
                                ),
                                '282.5' => array(
                                    'ses_takip'=>'>4.500',
                                    "node"  => array(
                                        '282.5' => array(
                                            'ses_takip'=>'<=7',
                                            "node"  => array(
                                                '282.5' => array(
                                                    'video_takip'=>'<=3.500'
                                                ),
                                                '217.7' => array(
                                                    'video_takip'=>'>3.500'
                                                )
                                            )
                                        ),
                                        '196' => array(
                                            'ses_takip'=>'>7'
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
            "swf_takip"=>">0.500",
            "node"  => array(
                "239.1" => array(
                    'swf_takip'=>'<=2.500',
                    "node"  => array(
                        "239.1" => array(
                            'swf_takip'=>'<=1.500',
                            "node" => array(
                                "189.45" => array(
                                    'video_takip'=>'<=1.500',
                                    "node"  => array(
                                        "189.45" => array(
                                            'ses_takip'=>'<=3',
                                            "node"  => array(
                                                "202.28" => array(
                                                    'ses_takip'=>'<=1'
                                                ),
                                                "189.45" => array(
                                                    'ses_takip'=>'>1'
                                                ),
                                            )
                                        ),
                                        "193.77" => array(
                                            'ses_takip'=>'>3',
                                            "node"  => array(
                                                "193.77" => array(
                                                    'ses_takip'=>'<=5'
                                                ),
                                                "230.17" => array(
                                                    'ses_takip'=>'>5'
                                                ),
                                            )
                                        )
                                    )
                                ),
                                "239.1" => array(
                                    'video_takip'=>'>1.500',
                                    "239.1" => array(
                                        'ses_takip'=>'<=2.500',
                                        "235.55" => array(
                                            'metin_takip'=>'<=3'
                                        ),
                                        "239.1" => array(
                                            'metin_takip'=>'>3'
                                        )
                                    ),
                                    "202.3" => array(
                                        'ses_takip'=>'>2.500'
                                    )
                                )
                            )
                        ),
                        "169.22" => array(
                            'swf_takip'=>'>1.500',
                            "169.22" => array(
                                'ses_takip'=>'<=0.500',
                                "169.22" => array(
                                    'video_takip'=>'<=2'
                                ),
                                "257.37" => array(
                                    'video_takip'=>'>2'
                                )
                            ),
                            "197.12" => array(
                                'ses_takip'=>'>0.500',
                                "197.12" => array(
                                    'metin_takip'=>'<=1.500',
                                    "197.12" => array(
                                        'video_takip'=>'<=2.500'
                                    ),
                                    "216.22" => array(
                                        'video_takip'=>'>2.500'
                                    ),
                                ),
                                "238.03" => array(
                                    'metin_takip'=>'>1.500'
                                )
                            )
                        )
                    )
                ),
                "114.85" => array(
                    'swf_takip'=>'>2.500',
                    "node"  => array(
                        "114.85" => array(
                            'video_takip'=>'<=3',
                            "node"  => array(
                                "114.85" => array(
                                    'ses_takip'=>'<=1.500',
                                    "node"  => array(
                                        "114.85" => array(
                                            'metin_takip'=>'<=1'
                                        ),
                                        "229.05" => array(
                                            'metin_takip'=>'>1'
                                        ),
                                    )
                                ),
                                "138.33" => array(
                                    'ses_takip'=>'>1.500',
                                    "138.33" => array(
                                        'ses_takip'=>'<=2.500',
                                        "138.33" => array(
                                            'video_takip'=>'<=0.500'
                                        ),
                                        "251.5" => array(
                                            'video_takip'=>'>0.500'
                                        ),
                                    ),
                                    "218.42" => array(
                                        'ses_takip'=>'>2.500'
                                    )
                                )
                            )
                        ),
                        "235.75" => array(
                            'video_takip'=>'>3',
                            "node"  => array(
                                "235.75" => array(
                                    'swf_takip'=>'<=6',
                                    "node"  => array(
                                        "235.75" => array(
                                            'swf_takip'=>'<=3.500'
                                        ),
                                        "286.05" => array(
                                            'swf_takip'=>'>3.500',
                                            "node"  => array(
                                                "286.05" => array(
                                                    'ses_takip'=>'<=5'
                                                ),
                                                "295.27" => array(
                                                    'ses_takip'=>'>5'
                                                )
                                            )
                                        ),
                                    )
                                ),
                                "302.95" => array(
                                    'swf_takip'=>'>6',
                                    "node"  => array(
                                        "302.95" => array(
                                            'video_takip'=>'<=7.500'
                                        ),
                                        "335.52" => array(
                                            'video_takip'=>'>7.500'
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
}
