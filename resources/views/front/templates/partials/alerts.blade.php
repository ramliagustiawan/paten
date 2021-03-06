
<script>

    @if (session('success'))

        $.notify( 
        {
            // options
            message:'{{session('success')}} ' 
        },
        {
            // settings
            type: 'success',
            placement: {
                from: "top",
                align: "right"
            },
            animate: {
                enter: "animated rollIn",
                exit: "animated rollOut"
            }
        });
    @endif

    @if (session('info'))
        $.notify({
        //options
            message: '{{ session('info') }}'
        },{
            //settings
            type: 'info',
            placement: {
                from: "top",
                align: "right"
            },
            animate: {
                enter: "animated rollIn",
                exit: "animated rollOut"
            }
        });
    @endif

    @if (session('danger'))
        $.notify({
        //options
            message: '{{ session('danger') }}'
        },{
            //settings
            type: 'danger',
            placement: {
                from: "top",
                align: "right"
            },
            animate: {
                enter: "animated rollIn",
                exit: "animated rollOut"
            }
        });
    @endif

</script>


