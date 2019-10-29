

{{--  jquery  --}}
<script src="{{ asset('assets/js/jquery_3_4_1.min.js') }}"></script>

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

</body>

@stack ('scripts')
