@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <div class="btn-toolbar">
                <span class="headline">Histórico de Refeições - {{$customer->name}}</span>
            </div>
        </div>
        <table class="datatables table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Data</th>
                    <th>Valor (R$)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer->meals()->orderBy('created_at', 'desc')->get() as $meal)
                    <tr>
                        <td> {{ $meal->id }} </td>
                        <td>{{ date_format(date_create($meal->created_at), "d/m/Y H:i:s") }}</td>
                        <td> {{ number_format(floatval($meal->price), 2, ',', '.')  }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
