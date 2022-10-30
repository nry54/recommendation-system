<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $ruleSets = array(
        "rule-1" => array(
            'swf_takip <=0.500',
            'mode'=> "282.5",
            'rule-1.1' => array(
                'ses_takip<=1.500',
                "mode" => "130.05",
                'rule-1.1.1' => array(
                    'metin_takip <=1.500',
                    "mode" => "130.05",
                    'rule-1.1.1.1' => array(
                        'ses_takip<=0.500',
                        "mode" => "145.08",
                        'rule-1.1.1.1.1' => array(
                            'video_takip<=4',
                            "mode" => "158.98"
                        ),
                        'rule-1.1.1.1.2' => array(
                            'video_takip>4 && video_takip<=7',
                            "mode" => "145.08"
                        ),
                        'rule-1.1.1.1.3' => array(
                            'video_takip<=7',
                            "mode" => "206.77"
                        )
                    ),
                    'rule-1.1.1.2' => array(
                        'ses_takip>0.500',
                        "mode" => "135.05",
                    )
                ),
                'rule-1.1.2' => array(
                    'metin_takip >1.500',
                    "mode" => "145.18",
                    'rule-1.1.2.1' => array(
                        'video_takip <=3',
                        "mode" => "145.18",
                        'rule-1.1.2.1.1' => array(
                            'video_takip <=0.500',
                            "mode" => "145.18",
                        ),
                        'rule-1.1.2.1.2' => array(
                            'video_takip >0.500',
                            "mode" => "267.3",
                        )
                    ),
                    'rule-1.1.2.2' => array(
                        'video_takip >3',
                        "mode" => "199.6",
                        'rule-1.1.2.2.1' => array(
                            'video_takip <=5',
                            "mode" => "199.6",
                        ),
                        'rule-1.1.2.2.2' => array(
                            'video_takip >5',
                            "mode" => "220.9",
                        )
                    )
                )
            ),
            'rule-1.2' => array(
                'ses_takip>1.500',
                "mode" => "282.5",
                'rule-1.2.1' => array(
                    'ses_takip<=3.500',
                    "mode" => "110",
                    'rule-1.2.1.1' => array(
                        'ses_takip<=2.500',
                        "mode" => "110",
                        'rule-1.2.1.1.1' => array(
                            'metin_takip<=2.500',
                            "mode" => "110",
                        ),
                        'rule-1.2.1.1.2' => array(
                            'metin_takip>2.500',
                            "mode" => "207.1",
                        ),
                    ),
                    'rule-1.2.1.2' => array(
                        'ses_takip>2.500',
                        "mode" => "176.1",
                        'rule-1.2.1.2.1' => array(
                            'video_takip<=1.500',
                            "mode" => "176.1",
                        ),
                        'rule-1.2.1.2.2' => array(
                            'video_takip>1.500',
                            "mode" => "194.15",
                        )
                    )
                ),
                'rule-1.2.2' => array(
                    'ses_takip>3.500',
                    "mode" => "282.5",
                    'rule-1.2.2.1' => array(
                        'ses_takip<=4.500',
                        "mode" => "192.55",
                        'rule-1.2.2.1.1' => array(
                            'metin_takip<=1',
                            "mode" => "192.55",
                        ),
                        'rule-1.2.2.1.1.2' => array(
                            'metin_takip>1',
                            "mode" => "247.2",
                        )
                    ),
                    'rule-1.2.2.2' => array(
                        'ses_takip>4.500',
                        "mode" => "282.5",
                        'rule-1.2.2.2.1' => array(
                            'ses_takip<=7',
                            "mode" => "282.5",
                            'rule-1.2.2.2.1.1' => array(
                                'video_takip<=3.500',
                                "mode" => "282.5",
                            ),
                            'rule-1.2.2.2.1.2' => array(
                                'video_takip>3.500',
                                "mode" => "217.7",
                            )
                        ),
                        'rule-1.2.2.2.2' => array(
                            'ses_takip>7',
                            "mode" => "196",
                        )
                    )
                )
            )
        ),
        "rule-2" => array(
            'swf_takip>0.500',
            'mode'=> "239.1",
            "rule-2.1" => array(
                'swf_takip<=2.500',
                'mode'=> "239.1",
                "rule-2.1.1" => array(
                    'swf_takip<=1.500',
                    'mode'=> "239.1",
                    "rule-2.1.1.1" => array(
                        'video_takip<=1.500',
                        'mode'=> "189.45",
                        "rule-2.1.1.1.1" => array(
                            'ses_takip<=3',
                            'mode'=> "189.45",
                            "rule-2.1.1.1.1.1" => array(
                                'ses_takip<=1',
                                'mode'=> "202.28",
                            ),
                            "rule-2.1.1.1.1.2" => array(
                                'ses_takip>1',
                                'mode'=> "189.45",
                            ),
                        ),
                        "rule-2.1.1.1.2" => array(
                            'ses_takip>3',
                            'mode'=> "193.77",
                            "rule-2.1.1.1.2.1" => array(
                                'ses_takip<=5',
                                'mode'=> "193.77",
                            ),
                            "rule-2.1.1.1.2.2" => array(
                                'ses_takip>5',
                                'mode'=> "230.17",
                            ),
                        )
                    ),
                    "rule-2.1.1.2" => array(
                        'video_takip>1.500',
                        'mode'  => '239.1',
                        "rule-2.1.1.2.1" => array(
                            'ses_takip<=2.500',
                            'mode'  => '239.1',
                            "rule-2.1.1.2.1.1" => array(
                                'metin_takip<=3',
                                'mode'  => '235.55',
                            ),
                            "rule-2.1.1.2.1.2" => array(
                                'metin_takip>3',
                                'mode'  => '239.1',
                            )
                        ),
                        "rule-2.1.1.2.2" => array(
                            'ses_takip>2.500',
                            'mode'  => '202.3',
                        )
                    )
                ),
                "rule-2.1.2" => array(
                    'swf_takip>1.500',
                    'mode'=> "169.22",
                    "rule-2.1.2.1" => array(
                        'ses_takip<=0.500',
                        'mode'=> "169.22",
                        "rule-2.1.2.1.1" => array(
                            'video_takip<=2',
                            'mode'=> "169.22",
                        ),
                        "rule-2.1.2.1.2" => array(
                            'video_takip>2',
                            'mode'=> "257.37",
                        )
                    ),
                    "rule-2.1.2.1" => array(
                        'ses_takip>0.500',
                        'mode'=> "197.12",
                        "rule-2.1.2.1.1" => array(
                            'metin_takip<=1.500',
                            'mode'=> "197.12",
                            "rule-2.1.2.1.1.1" => array(
                                'video_takip<=2.500',
                                'mode'=> "197.12",
                            ),
                            "rule-2.1.2.1.1.2" => array(
                                'video_takip>2.500',
                                'mode'=> "216.22",
                            ),
                        ),
                        "rule-2.1.2.1.2" => array(
                            'metin_takip>1.500',
                            'mode'=> "238.03",
                        )
                    )
                )
            ),
            "rule-2.2" => array(
                'swf_takip>2.500',
                "mode"  => "114.85",
                "rule-2.2.1" => array(
                    'video_takip<=3',
                    "mode"  => "114.85",
                    "rule-2.2.1.1" => array(
                        'ses_takip<=1.500',
                        "mode"  => "114.85",
                        "rule-2.2.1.1.1" => array(
                            'metin_takip<=1',
                            "mode"  => "114.85"
                        ),
                        "rule-2.2.1.1.2" => array(
                            'metin_takip>1',
                            "mode"  => "229.05"
                        ),
                    ),
                    "rule-2.2.1.2" => array(
                        'ses_takip>1.500',
                        "mode"  => "138.33",
                        "rule-2.2.1.2.1" => array(
                            'ses_takip<=2.500',
                            "mode"  => "138.33",
                            "rule-2.2.1.2.1.1" => array(
                                'video_takip<=0.500',
                                "mode"  => "138.33"
                            ),
                            "rule-2.2.1.2.1.2" => array(
                                'video_takip>0.500',
                                "mode"  => "251.5"
                            ),
                        ),
                        "rule-2.2.1.2.2" => array(
                            'ses_takip>2.500',
                            "mode"  => "218.42"
                        )
                    )
                ),
                "rule-2.2.2" => array(
                    'video_takip>3',
                    "mode"  => "235.75",
                    "rule-2.2.2.1" => array(
                        'swf_takip<=6',
                        "mode"  => "235.75",
                        "rule-2.2.2.1.1" => array(
                            'swf_takip<=3.500',
                            "mode"  => "235.75"
                        ),
                        "rule-2.2.2.1.2" => array(
                            'swf_takip>3.500',
                            "mode"  => "286.05",
                            "rule-2.2.2.1.2.1" => array(
                                'ses_takip<=5',
                                "mode"  => "286.05"
                            ),
                            "rule-2.2.2.1.2.2" => array(
                                'ses_takip>5',
                                "mode"  => "295.27"
                            )
                        ),
                    ),
                    "rule-2.2.2.2" => array(
                        'swf_takip>6',
                        "mode"  => "302.95",
                        "rule-2.2.2.2.1" => array(
                            'video_takip<=7.500',
                            "mode"  => "302.95"
                        ),
                        "rule-2.2.2.2.2" => array(
                            'video_takip>7.500',
                            "mode"  => "335.52"
                        )
                    )
                )
            )
        )
    ); 
}
