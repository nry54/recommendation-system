@extends('layout') 
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" key="SINAV_SONUC_BILGI">
                <div class="card-body">
                    <div class="text-overline">
                       <h5 class="font-weight-black"> SINAV SONUCUM </h5> 
                    </div>
                    <v-divider></v-divider>
                    
                    <v-layout row wrap>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                               Sınav Adı: 
                            </span>
                            <span>
                                @{{ sinav_adi }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Sınav Giren Öğrenci Sayısı:
                            </span>
                            <span>
                                @{{ toplamOgrenci }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Sınav Kodu:
                            </span>
                            <span>
                                @{{ sinav_kodu }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Sınava Giren Öğrencilerin Ortalama Başarısı:
                            </span>
                            <span>
                                @{{ ortalama_puan }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Başarı Puanım:
                            </span>
                            <span>
                                @{{ basari_puani }} 
                            </span>
                        </v-flex>
                    </v-layout>
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
                    <div v-else-if="oneriler">
                        @{{ oneriler }} 
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
                    toplamOgrenci: 0,
                    ortalama_puan: null,
                    ortalamaninUstundeMi:false,
                    oneriler:'',
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
                                if(sonuc["oneriler"]){
                                    vm.oneriler = sonuc["oneriler"];
                                }

                                if(sonuc.sonucOneriler){ 
                                    let sonuc_oneri = sonuc.sonucOneriler;
                                    
                                    if(sonuc_oneri["ogrenci_veri"]) {
                                        let sinav_veri = sonuc_oneri["ogrenci_veri"];
                                        vm.sinav_adi = sinav_veri["ad"];
                                        vm.sinav_kodu = sinav_veri["kod"];
                                        vm.basari_puani = sinav_veri["basari_puani"];
                                    }

                                    if(sonuc_oneri["ortalamaninUstundeMi"]){
                                        vm.ortalamaninUstundeMi = sonuc_oneri["ortalamaninUstundeMi"];
                                    }

                                    if(sonuc_oneri["ogrenci_sayisi"]){
                                        vm.toplamOgrenci = sonuc_oneri["ogrenci_sayisi"];
                                    }

                                    if(sonuc_oneri["ortalama_puan"]){
                                        vm.ortalama_puan = Number(sonuc_oneri["ortalama_puan"].toFixed(2));
                                    }
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