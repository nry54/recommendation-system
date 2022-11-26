@extends('layout') 
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" key="SINAV_SONUC_BILGI">
                <div class="card-body">
                    <div class="text-overline">
                       <h6 class="font-weight-black"> SINAV SONUCUM </h6> 
                    </div>
                    <v-divider></v-divider>
                    <div>
                        <span class="font-weight-black">
                            Sınav Adı:
                        </span>
                        <span>
                            @{{ sinav_adi }} 
                        </span>
                    </div>

                    <div>
                        <span class="font-weight-black">
                            Sınav Kodu:
                        </span>
                        <span>
                            @{{ sinav_kodu }} 
                        </span>
                    </div>

                    <div>
                        <span class="font-weight-black">
                            Başarı Puanım:
                        </span>
                        <span>
                            @{{ basari_puani }} 
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card" key="ONERILER">
                <div class="card-body">
                    <div class="text-overline mb-4">
                        <h6 class="font-weight-black"> ÖNERİLER</h6>
                    </div>
                    <v-divider></v-divider>
                    <div v-if="ortalamaninUstundeMi">
                        Puanınız ortalamanın üstünde.. Çok iyi gidiyorsun, aynen bu şekilde çalışmaya devam et. Başarılarının devamını dilerim..
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let mixinApp = {
            mounted() {
                this.oneriAl();
            },
            data() {
                return {
                    basari_puani:null,
                    sinav_adi:null,
                    sinav_kodu:null,
                    ortalamaninUstundeMi:false,
                };
            },
            methods: {
                oneriAl() { 
                    axios.post("{{ route('oneriAl') }}")
                    .then(response => {
                        if (!response.data.durum) {
                            return this.uyariAc({
                                baslik: 'Hata',
                                mesaj: response.data.mesaj,
                                tur: "error"
                            });
                        }
                        else {
                            let sonuc = response.data;
                            if(sonuc){
                                if(sonuc.sonucOneriler){ 
                                    let sonuc_oneri = sonuc.sonucOneriler;
                                    
                                    if(sonuc_oneri["ogrenci_veri"]) {
                                        let sinav_veri = sonuc_oneri["ogrenci_veri"];
                                        vm.sinav_adi = sinav_veri["ad"];
                                        vm.sinav_kodu = sinav_veri["kod"];
                                        vm.basari_puani = sinav_veri["basari_puani"];
                                    }
                                }

                                if(sonuc.ortalamaninUstundeMi){
                                    vm.ortalamaninUstundeMi = sonuc.ortalamaninUstundeMi;
                                }
                            }
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    });
                }
            },
        };
    </script>
@endsection