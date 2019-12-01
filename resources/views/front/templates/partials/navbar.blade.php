<nav class="navbar navbar-expand-md navbar-light fixed-top " style="background-color: khaki">
        <div class="container">

            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="{{ asset('assets/images/kota.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                | SIP PATEN
            </a>

            {{--  button layar menu HP  --}}

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
                    <ul class="navbar-nav  " >
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('homepage') }}"><i class="fas fa-home"></i> HOME</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('info.index') }}"><i class="fas fa-info-circle"></i> INFORMASI LAYANAN</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('ajukan.index') }}"><i class="fas fa-edit"></i> AJUKAN LAYANAN</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('report.index') }}"><i class="fas fa-phone-square-alt"></i> PELAPORAN</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('login') }}" tabindex="-1" aria-disabled="true"><i class="fas fa-sign-in-alt"></i> LOGIN</a>
                            </li>
                    </ul>
            </div>
        </div>
    </nav>
