@if(session('status'))
    <script type="text/javascript">
        toastr.success('{{session('status')}}');
    </script>
@endif
