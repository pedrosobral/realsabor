@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Novo Cliente</div>
                <div class="panel-body">
                    {!! Form::model($customer, ['method' => 'PATCH',
                            'route' => ['customer.update', $customer->id]]) !!}
                    @include('customer._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
    @include('toasts.error')

    <script>
        $('#companies_list').select2({
            placeholder: "Selecione uma empresa",
            allowClear: true,
            tags: true
        });
    </script>
@endsection
