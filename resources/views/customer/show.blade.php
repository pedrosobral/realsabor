<div class="page-header">
    <div class="btn-toolbar">
        <span class="headline">{{$customer->name}}</span>
        <button data-toggle="modal" data-target="#payment_modal" class="btn btn-success pull-right " role="button">
            <span class="glyphicon glyphicon-cutlery"></span> Pagamento</button>
        <button data-toggle="modal" data-target="#meal_modal" class="btn btn-warning pull-right" role="button">
            <span class="glyphicon glyphicon-usd"></span> Consumo</button>
    </div>
</div>
<div class="row">
        <div class="well">
                <span class="label label-primary balance">Saldo: R$ {{$balance}}</span>
        </div>
    <div class="col-md-5">
        <div class="panel panel-success">
            <div class="panel-heading">Últimas refeições</div>
            <table id="meals" class="table table-striped table-condensed"  cellspacing="0">
                <thead>
                    <th> #ID </th>
                    <th> Data </th>
                    <th> Valor (R$) </th>
                </thead>
                <tbody>
                    @foreach($customer->meals()->orderBy('created_at', 'desc')->limit(5)->get() as $meal)
                        <tr>
                            <td> {{ $meal->id }} </td>
                            <td><span class="data" data-date="{{$meal->created_at}}">{{ $meal->date  }}</span></td>
                            <td> {{ $meal->price }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-7">
        <div class="panel panel-warning">
            <div class="panel-heading">Últimos Pagamentos</div>
            <table id="meals" class="table table-striped table-condensed"  cellspacing="0" width="100%">
                <thead>
                    <th> Data </th>
                    <th> Valor (R$) </th>
                    <th> Saldo (R$) </th>
                    <th> #Consumo </th>
                </thead>
                <tbody>
                    @foreach($customer->payments()->orderBy('created_at', 'desc')->limit(5)->get() as $payment)
                        <tr>
                            <td><span class="data" data-date="{{$payment->created_at}}"></span> </td>
                            <td> {{ $payment->value }} </td>
                            <td> {{ $payment->balance }} </td>
                            <td> {{ $payment->last_meal_id }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(function() {
        var dates = $('.data');
        dates.each(function(date) {
            this.innerHTML = moment(new Date(this.dataset.date)).calendar();
        });
    });
</script>

@include('transactions.payment')
@include('transactions.meal')
