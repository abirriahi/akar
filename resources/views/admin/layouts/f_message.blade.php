@if(Session::has('flash_message'))

    <script>
        swal({   title: "{{ Session::get('flash_message') }} ",   text: "  هذة الرسالة سوف تختفي بعد ٤ ثانية ",   timer: 4000,   showConfirmButton: false });
    </script>

@endif