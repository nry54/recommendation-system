@extends('layout')
@section('content')
    <div class="row">
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
                                    <th>Öğrenci Ad Soyad</th>
                                    <th>Başarı Puanı</th>
                                    <th class="text-center">Öğrenme Stili</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(ogrenci, index) in ogrenciListesi" :key="index">
                                    <td>
                                        <div class="col-12">
                                            @{{ ogrenci.ad }}  @{{ ogrenci.soyad }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @{{ ogrenci.basari_puani }}
                                    </td>
                                    <td class="text-center">
                                        @{{ ogrenme_stilleri[ogrenci.kullanici_id] }}
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
                        }
                    });
                }
            }
        };
    </script>
@endsection
