@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Empresas</div>
                <div class="panel-body">
                    @foreach($companies as $company)
                        <h4>{{ $company->name }}</h4>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
