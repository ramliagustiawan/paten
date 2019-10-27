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

        {{-- breadcrumb --}}
       


        <main>
            {{--  jumbotron  --}}
          
            {{-- jumbotron-end --}}


         

            {{--  card  --}}


           


            {{-- main content --}}
            <section >

                    @yield('content')


            </section>

        </main>



             {{--  footer  --}}

             @include('front.templates.partials.footer')


        {{--  scripts  --}}

        @include('front.templates.partials.script')

    </body>

</html>

