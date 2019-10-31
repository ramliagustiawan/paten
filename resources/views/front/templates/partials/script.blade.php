

{{--  jquery  --}}
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

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
{{--  <script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>  --}}

<!-- FastClick -->
{{--  <script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>  --}}

@stack('scripts')




