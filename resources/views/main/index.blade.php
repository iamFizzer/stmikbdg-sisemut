<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Antrian</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="{{asset('asset')}}/https://fonts.googleapis.com">
        
        <link rel="preconnect" href="{{asset('asset')}}/https://fonts.gstatic.com" crossorigin>

        <link href="{{asset('asset')}}/https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{asset('asset')}}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{asset('asset')}}/css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{asset('asset')}}/css/templatemo-topic-listing.css" rel="stylesheet">      

    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{asset('asset')}}/index.html">
                        <i class="bi-back"></i>
                        <span>SI SEMUT</span>
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                       

                        <div class="d-none d-lg-block">
                            <a href="{{asset('asset')}}/#top" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Silahkan tap Dosen yang di tuju Dengan RFID</h1>


                            <form method="post" action="/cekdosen" >
                                <div class="input-group input-group-lg">
                                    @csrf

                                    <input name="keyword" type="password" class="form-control" id="keyword" placeholder="kode Dosen ..." aria-label="Search" autofocus>
                                    @if(session('error'))
                                    <div class="error">{{ session('error') }}</div>
                                @endif
                                    <button type="submit" class="form-control" hidden>Sumbit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">
                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2024.
                        <br><br>Design: <a rel="nofollow" href="{{asset('asset')}}/https://stmik-bandung.ac.id" target="_blank">Dev Stmik Bandung</a></p>
                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('asset')}}/js/jquery.min.js"></script>
        <script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('asset')}}/js/jquery.sticky.js"></script>
        <script src="{{asset('asset')}}/js/click-scroll.js"></script>
        <script src="{{asset('asset')}}/js/custom.js"></script>

    </body>
</html>
