@if (count($errors) > 0)
<script type="text/javascript">
    @foreach ($errors->all() as $error)
        toastr.error('{{$error}}');
    @endforeach
</script>
@endif
