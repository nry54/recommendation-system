<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Eğitim Öneri Sistemi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.png">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/vue-select@3/dist/vue-select.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
   
    <style>
        table td.kisa-uzunluk {
            min-width: 100px;
        }

        table td.orta-uzunluk {
            min-width: 150px;
        }

        table td.uzun-uzunluk {
            min-width: 200px;
        }

        table td.en-uzun-uzunluk {
            min-width: 275px;
        }

        table td.align-left {
            text-align: left !important;
        }

        table td.align-right {
            text-align: right !important;
        }

        table td.align-center {
            text-align: center !important;
        }
    </style>
    @yield('style')
</head>

<body data-layout="detached" data-topbar="colored">
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>

    <div id="app" class="container-fluid">
        <div id="layout-wrapper">
            <div class="main-content">
                <div class="page-content mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <!-- sidebar button -->
                                <div class="d-inline-flex align-items-center justify-content-between">
                                   
                                    <a href="{{ route('anasayfa') }}" class="waves-effect">
                                        <h1 class="page-title mb-0 px-1 font-size-20 text-nowrap d-none d-sm-block">EĞİTİM ÖNERİ SİSTEMİ</h1>
                                    </a>
                                </div>
                                <div>
                                   
                                    <div class="float-end"> 
                                        <div class="chip">
                                            {{ Auth::user()->ad }} {{ Auth::user()->soyad }}
                                        </div>  
                                      

                                        <button class="button button4"> <a href="{{ route('logout') }}" class="text-white">  Çıkış Yap </a> </button>
                                                                                  
                                        
                                        <div class="dropdown d-inline-block">                                      
                                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown" style="min-width: 350px;">                                                                                                                                                                                                                                                                                                                            B933' : '' }">                                                                                                                                                         t).format("L LTS") }}</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                         </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        @yield('content')
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                               
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    Y195052055 Nuray ŞENTÜRK
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    @yield("script")

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- axios cdn -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- v-mask -->
    <script src="https://cdn.jsdelivr.net/npm/v-mask/dist/v-mask.min.js"></script>
    <!-- v-money -->
    <script src="https://cdn.jsdelivr.net/npm/v-money@0.8.1/dist/v-money.min.js"></script>
    <!-- lodash -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <!-- momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- or point to a specific vue-select release -->
    <script src="https://unpkg.com/vue-select@3.20.0/dist/vue-select.js"></script>

    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>

    <script>
        moment.locale("tr");

        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

        @if (in_array(request()->getHost(), ['localhost', 'localhost:8000', "oneri_sistemi"]))
            let vm = 
        @endif
        new Vue({
            mixins: [mixinApp],
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                sidebarModel: false,
                yukleniyor: false,                                         
            },
            computed: {
                m() {
                    return moment;
                }
            },
            methods: {
                yukleniyorDurum(durum){
                    this.yukleniyor = durum;
                },
                uyariAc(obje) {
                    if (obje.toast !== undefined) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: obje.toast.position ? obje.toast.position : 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        });

                        return Toast.fire({
                            icon: obje.toast.status ? 'success' : 'error',
                            title: obje.toast.message ? obje.toast.message : 'İşlem başarılı!'
                        });
                    }

                    Swal.fire({
                        title: obje.baslik,
                        text: obje.mesaj,
                        icon: obje.tur,
                        ...obje.ozellikler
                    });
                }, 
            },
        });
    </script>

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #DDD;
            border-radius: 4px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #929292cc;
            border-radius: 4px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #939393;
        }

        .sidenav#side-nav {
            height: 100%; /* 100% Full-height */
            width: 0; /* 0 width - change this with JavaScript */
            position: fixed; /* Stay in place */
            z-index: 10; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #ffffff; /* Black*/
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 25px; /* Place content 60px from the top */
            transition: 0.3s; /* 0.5 second transition effect to slide in the sidenav */
            /* box-shadow: 0px 0 5px grey; */
        }

        .side-nav-overlay {
            position: fixed; /* Stay in place */
            z-index: 5; /* Sit on top */
            top: 0; /* Stay at the top */
            left: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #000000; /* Black*/
            opacity: 0; /* Set opacity to 0.5 */
            display: none;
            transition: all .3s;
        }

        .sidenav#side-nav a {
            padding: 8px 8px 8px 32px;
            display: block;
            white-space: nowrap;
            transition: 0.3s;
        }

        .sidenav#side-nav .closebtn {
            position: absolute;
            top: 0;
            right: 16px;
            font-size: 36px;
            margin-left: 50px;
        }

        .sidenav#side-nav li {
            padding-right: 12px;
        }

        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            font-size: 16px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #f1f1f1;
        }

        .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        .button {
            background-color: #cc3c3c; /* Green */
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {border-radius: 2px;}
        .button2 {border-radius: 4px;}
        .button3 {border-radius: 8px;}
        .button4 {border-radius: 12px;}
        .button5 {border-radius: 50%;}

        .card {
            border: 1px solid #96afe3;
            border-radius: 12px;
        }
    </style>

</body>

</html>