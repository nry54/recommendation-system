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
                     <v-layout row wrap>
                        <v-flex xs12>
                            <v-data-table
                                :headers="headers"
                                :items="ogrenciListesi"
                                class="elevation-1"
                            >
                                <template v-slot:items="props">
                                    <td> | props.item.ad |</td>
                                    <td class="text-xs-right">| props.item.basari_puani |</td>
                                    <td class="justify-center layout px-0">
                                    
                                    </td>
                                </template>
                            </v-data-table>
                        </v-flex>
                     </v-layout>
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
                    headers: [
                        { text: 'Öğrenci Adı', value: 'ad',sortable: false },
                        { text: 'Başarı Puanı', value: 'basari_puani' },
                    ],
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
                            vm.ogrenciListesi = sonuc["ogrenciListesi"];
                        }
                    });
                }
            }
        };
    </script>
@endsection
