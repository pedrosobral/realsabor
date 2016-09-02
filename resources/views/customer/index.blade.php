@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <div class="page-header">
                    <h3>Clientes
                        <a href="{!! route('customer.create') !!}" class="btn btn-default pull-right" role="button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Cliente
                        </a>
                    </h3>
                </div>
                <table class="datatables table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Empresa</th>
                            <th>CPF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" value="{{$customer->id}}" class="customer">
                                        {{ $customer->name }}
                                    </a>
                                </td>
                                <td> {{ $customer->company->name }} </td>
                                <td> {{ $customer->cpf }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div id="details" class="col-md-7">
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('toasts.success');

    <script>
    $('.customer').click(function(){
        var id = $(this).attr('value');
        $.ajax({
            url: 'customer/details/' + id,
            success: function(data){
                $('#details').html(data);
            },
            error: function(){
                console.error('customer.index.blade.php');
            },
        });
    });
    </script>
@endsection
