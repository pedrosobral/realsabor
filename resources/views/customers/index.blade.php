@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>
                    <div class="panel-body">
                        <a href="{!! route('customers.create') !!}" class="btn btn-primary pull-right" role="button">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            Novo Cliente
                        </a>
                        @foreach($customers as $customer)
                            <h4>{{ $customer->name }}</h4>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
