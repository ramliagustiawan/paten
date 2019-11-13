<!DOCTYPE html>
<html lang="en">

    <head>
       @include('front.templates.partials.head')
    </head>

    <body>

        {{-- navbar --}}
       <section>
            @include('front.templates.partials.navbar')
        </section>

        {{-- navbar-end --}}

<main>
            {{--  jumbotron  --}}
            <section>

               @include('front.templates.partials.jumbotron')

            </section>
            {{-- jumbotron-end --}}


            <section>

            {{--  card  --}}
            @include('front.templates.partials.card')

            </section>


            {{-- main content --}}

            @yield('content')

</main>

             {{--  footer  --}}

             @include('front.templates.partials.footer')


        {{--  scripts  --}}

        @include('front.templates.partials.script')





        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')




    </body>

</html>

