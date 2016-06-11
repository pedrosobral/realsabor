@extends('layouts.app')

@section('content')
    <h1>Clientes</h1>
    @foreach($customers as $customer)
        <h1>{{ $customer->name }}</h1>
    @endforeach
@endsection
