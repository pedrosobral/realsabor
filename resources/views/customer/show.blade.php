@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="page-header">
            <div class="btn-toolbar">
                <div class="col-md-6">
                    <span class="headline"> {{$customer->name}}</span>
                </div>
                <div class="col-md-offset-1 col-md-5">

                    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                        <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-default" role="button">
                            <span class="glyphicon glyphicon-edit"></span> Editar
                        </a>
                        <a class="btn btn-default" data-toggle="modal" data-target="#payment_modal" role="button">
                            <span class="glyphicon glyphicon-usd"></span> Pagamento
                        </a>
                        <a data-toggle="modal" data-target="#meal_modal" class="btn btn-default" role="button">
                            <span class="glyphicon glyphicon-cutlery"></span> Consumo
                        </a>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-success panel-saldo">
            <div class="panel-heading">
                <h4 class="panel-title">Saldo</h4>
            </div>
            <div class="panel-body">
                <div class="stats">
                    <div class="stats-number">R$ {{$balance}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="panel panel-success">
            <div class="panel-heading"><a href="{{route('customer.meals.index', $customer->id)}}">Últimas refeições</a></div>
            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Valor (R$)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer->meals()->orderBy('created_at', 'desc')->limit(10)->get() as $meal)
                        <tr>
                            <td> {{ $meal->id }} </td>
                            <td><span class="data" data-date="{{$meal->created_at}}">{{ $meal->date  }}</span></td>
                            <td> {{ number_format(floatval($meal->price), 2, ',', '.')  }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-7">
        <div class="panel panel-warning">
            <div class="panel-heading"><a href="{{route('customer.payments.index', $customer->id)}}">Últimos Pagamentos</a></div>
            <table class="table table-striped table-hover table-condensed" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Valor (R$)</th>
                        <th>Saldo (R$)</th>
                        <th>#REF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer->payments()->orderBy('created_at', 'desc')->limit(10)->get() as $payment)
                        <tr>
                            <td> {{ $payment->id }} </td>
                            <td><span class="data" data-date="{{$payment->created_at}}"></span> </td>
                            <td> {{ number_format(floatval($payment->value), 2, ',', '.') }} </td>
                            <td> {{ number_format(floatval($payment->balance), 2, ',', '.') }} </td>
                            <td> {{ $payment->last_meal_id }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>
@stop

@section('footer')
    @include('toasts.success')

    <script>
        $(function() {
            var dates = $('.data');
            dates.each(function(date) {
                this.innerHTML = moment(new Date(this.dataset.date)).calendar();
            });
        });
    </script>

    @include('transactions.payment')
    @include('transactions.meal')
@stop
