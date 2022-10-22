@extends('layout') 
@section('content')
    <div class="row doruk-content">
        <div class="col-6">
            <div class="card" key="ONERI">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="card">
                            <button><h1>Öneri Al</h1></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" key="SINAV">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="card">
                            <button><h1>Sınav Sonuçlarım</h1></button>
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
                    
                };
            },
        };
    </script>
@endsection