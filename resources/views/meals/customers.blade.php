@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="btn-toolbar">
            <span class="headline">Refeições</span>
        </div>
    </div>
    <div class="col-md-12">
        <table class="datatables table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Refeição</th>
                    <th>Cliente</th>
                    <th>CPF</th>
                    <th>Empresa</th>
                    <th>Valor (R$)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meals as $meal)
                    <tr>
                        <td>{{ date_format(date_create($meal->created_at), "d/m/Y H:i:s") }}</td>
                        <td>{{ $meal->id }} </td>
                        <td>
                             <a href="{{ route('customer.show', $meal->customer->id) }}">{{ $meal->customer->name }} </a>
                         </td>
                        <td>{{ $meal->customer->cpf }} </td>
                        <td>{{ $meal->customer->company->name }} </td>
                        <td>{{ number_format(floatval($meal->price), 2, ',', '.')  }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
