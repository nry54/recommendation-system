@extends('layout')
@section('content')
    <div class="row doruk-content">
        <div class="col-6">
            <div class="card" key="OGRENCILERIM">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="card">
                            <button><h1>Öğrencilerim</h1></button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" key="DOKUMANLARIM">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="card">
                            <button><h1>Dokümanlarım</h1></button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let mixinApp = {
            data() {
                return {
                    aktifSayfa: {
                        kod: "ANASAYFA",
                        baslik: "Öğretmen Paneli",
                    },
                };
            },
        };
    </script>
@endsection
