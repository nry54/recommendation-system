<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Eğitim Öneri Sistemi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/unsplash.css" rel="stylesheet" />
    <style>
        .input-radius {
            border-radius: 15px;
        }
        
        .btn-submit {
            color: #000;
            font-weight: bold;
            background-color: #EDEDED;
            box-shadow: 0px 0px 5px 2px #999;
        }
    </style>
</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden login pt-5 pb-5">
                        <div class="text-center pt-5">                           
                           <h2 style="margin-top:30px;font-weight: 200;"><b> EĞİTİM ÖNERİ </b><br><b>SİSTEMİ</b></h2>
                        </div>
                        <div class="card-body p-3">
                            <div class="ps-5 pe-5">                               
                                <form class="form-horizontal" method="POST" action="/login">
                                    @if (isset($error) && $error)
                                        <div>
                                            {{ error }}
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control input-radius" id="username" name="username" placeholder="Kullanıcı  Adı">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control input-radius" id="password" name="password" placeholder="Parola">
                                    </div>
                                    <div class="mt-5">
                                        <button class="btn btn-submit input-radius ps-4 pe-4" type="submit">GİRİŞ</button>
                                    </div>
                                </form>
                            </div>
                            <div class="pt-5" style="color:#222; font-size: 12px;">
                               <b>  Y195052055 / NURAY ŞENTÜRK </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- <script src="assets/js/unsplash.js"></script> -->
    <script src="assets/js/app.js"></script>

</body>

</html>