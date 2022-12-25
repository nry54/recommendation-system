@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" key="ONERILER">
                <div class="card-body">
                    <div class="text-overline">
                        <h5 class="font-weight-black"> ÖNERİLER </h5> 
                     </div>
                     <v-divider></v-divider>
                     <v-container fluid grid-list-md>
                        Öğrencilerinize doküman verirken öğrenme stilllerini dikkate almanız öğrencilerinizin sınav başarısını artırma konusunda avantaj sağlayacaktır.
                        <br/>
                        <b>Görsel öğrenme </b> stiline sahip öğrencileriniz için video dosyaları ve power point dosyalarından faydalanabilirsiniz.
                        <br/>
                        <b>İşitsel öğrenme </b> stiline sahip öğrencileriniz için ses dosyaları kullanmanızda fayda var.
                        <br/>
                        <b>Okuma/Yazma öğrenme </b> stiline sahip öğrencileriniz için metin dosyaları tercih etmelisiniz.
                        <br/>
                        Son olarak ise <b>kinestetik öğrenme </b> stiline sahip öğrencileriniz swf dosyaları, etkileşimli uygulamalar
                        ile çalıştığında sınavlarında başarılı olacaktır..
                     </v-container>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card" key="OGRENCILERIM">
                <div class="card-body">
                    <div class="text-overline">
                        <h5 class="font-weight-black"> ÖĞRENCİLERİM </h5> 
                     </div>
                     <v-divider></v-divider>
                     <v-container fluid grid-list-md>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center"><b> Öğrenci Ad Soyad </b></th>
                                    <th class="text-center"><b>Başarı Puanı</b></th>
                                    <th class="text-center"><b>Öğrenme Stili </b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(ogrenci, index) in ogrenciListesi" :key="index">
                                    <td class="text-center">
                                        <div class="col-12">
                                            @{{ ogrenci.ad }}  @{{ ogrenci.soyad }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @{{ ogrenci.basari_puani }}
                                    </td>
                                    <td class="text-center" v-if="ogrenme_stilleri[ogrenci.kullanici_id]">
                                        @{{ ogrenme_stilleri[ogrenci.kullanici_id] }}
                                    </td>
                                    <td class="text-center" v-else>
                                        <span v-if="max_takip[ogrenci.kullanici_id]=='video_takip'"> Görsel </span>
                                        <span v-if="max_takip[ogrenci.kullanici_id]=='ses_takip'"> İşitsel </span>
                                        <span v-if="max_takip[ogrenci.kullanici_id]=='metin_takip'"> Okuma/Yazma </span>
                                        <span v-if="max_takip[ogrenci.kullanici_id]=='swf_takip'"> Kinestetik </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                        </table>
                    </v-container>  
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let mixinApp = {
            mounted() {
                this.ogrenciListesiGetir();
            },
            data() {
                return {
                    aktifSayfa: {
                        kod: "ANASAYFA",
                        baslik: "Öğretmen Paneli",
                    },
                    ogrenciListesi: [],
                    ogrenme_stilleri: [],
                    max_takip: [],
                };
            },
            methods: {
                ogrenciListesiGetir() { 
                    axios.post("{{ route('ogrenciListesiGetir') }}")
                    .then(response => {
                        if (!response.data.durum) {
                            return this.uyariAc({
                                baslik: 'Hata',
                                mesaj: response.data.mesaj,
                                tur: "error"
                            });
                        }
                        
                        let sonuc = response.data;
                        if(sonuc){
                            vm.ogrenciListesi = sonuc["ogrenciListesi"]["ogrenciListesi"];
                            vm.ogrenme_stilleri = sonuc["ogrenciListesi"]["dizi"];
                            vm.max_takip = sonuc["ogrenciListesi"]["max_takip"];
                        }
                    });
                }
            }
        };
    </script>
@endsection
