@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Resumo</div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{route('customer.index')}}" class="list-group-item">
                            <span class="badge">{{$customers->count()}}</span>
                            Clientes
                        </a>
                        <a href="{{route('companies.index')}}" class="list-group-item">
                            <span class="badge">{{$companies->count()}}</span>
                            Empresas
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
