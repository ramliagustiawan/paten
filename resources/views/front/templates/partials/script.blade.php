

{{--  jquery  --}}
<script src="{{ asset('assets/datatable/jquery/jquery.min.js') }}"></script>

{{-- <script src="{{ asset('assets/js/jquery_3_4_1.min.js') }}"></script> --}}

<!-- jQuery 3 -->
{{-- <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script> --}}
<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{ asset('assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->





{{--  fontawesome script  --}}
<script src="{{ asset('assets/fontawesome/js/all.js') }}"></script>

<script>
   $('#navId a').click(e => {
       e.preventDefault();
       $(this).tab('show');
   });
</script>

{{-- bootstrap js --}}
<script src="{{ asset('assets/bootstrap4_dist/js/bootstrap.min.js') }}"></script>


<!-- SlimScroll -->
<script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>

@stack('scripts')




