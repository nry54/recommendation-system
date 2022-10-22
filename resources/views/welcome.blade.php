@extends('layout') 
@section('content')
<div class="row doruk-content">
    <h4 style="color:#999"><i class="fa fa-home"></i> ANASAYFA dfdfd</h4>   

    <div
        class="card waves-effect"
        style="width: 100%;"
        @can("ogrenci-panel-goster")
            @click="route('/ogrenci')"
        @endcan
    >
        Öğrenci Sayfası
    </div>
</div>
@endsection

@section('script')
    <script>
        let mixinApp = {
            data() {
                return {
                   
                };
            },
        };
    </script>
@endsection