<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="{{ asset('assets/bootstrap4_dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/style/mystyle.css') }}">

    </head>
    <body>

            {{--  <nav class="navbar navbar-expand navbar-dark  " style="background-color:darkslategray">
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active" href="#">Sistem Informasi Pelaporan Dan Pelayana Terpadu Kecamatan Dungingi <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="#">Email : dungingioffice@gmail.com</a>
                    </div>
                </nav>  --}}



                <nav class="navbar navbar-expand-sm navbar-light sticky-top " style="background-color: khaki">
                    <div class="container">

                        <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="#">Action 1</a>
                                        <a class="dropdown-item" href="#">Action 2</a>
                                    </div>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>

                </nav>

                <div class="jumbotron jumbotron-fluid mt-0">
                           <div class="container">
                                <h1 class="display-4"><strong>SIP PATEN DUNGINGI</strong></h1>
                            <p class="lead"><strong>Sistem Informasi Pelaporan Dan Pelayanan Terpadu Kecamatan</strong></p>
                            <hr class="my-4">
                            <p>Pelayanan Dimana Saja Kapan Saja Dengan Lebih Pasti Dan Mudah</p>
                            <a class="btn btn-success btn-lg" href="#" role="button">Ajukan Layanan</a>
                           </div>


                </div>

























        {{--  scripts  --}}

        <script src="{{ asset('assets/bootstrap4_dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery_3_4_1.min.js') }}"></script>

        <script>
            $('#navId a').click(e => {
                e.preventDefault();
                $(this).tab('show');
            });
        </script>


    </body>
</html>

