@extends('layouts.app')

@section('content')
    <h1>Empresas</h1>
    @foreach($companies as $company)
        <h1>{{ $company->name }}</h1>
    @endforeach
@endsection
