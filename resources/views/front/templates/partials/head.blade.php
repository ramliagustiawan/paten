<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{$title ?? 'SIP PATEN'}}</title>


{{--  bootstrap4  --}}
<link rel="stylesheet" href="{{ asset('assets/bootstrap4_dist/css/bootstrap.min.css') }}">

{{--  mystyle  --}}
<link rel="stylesheet" href="{{ asset('assets/style/mystyle.css') }}">

{{--  fontawesome  --}}
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

@stack('datatable')

{{-- CAPTCHA --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- Google Font -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">




