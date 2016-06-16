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
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">Últimas refeições</div>
            <table id="meals" class="table table-striped"  cellspacing="0">
                <thead>
                    <th> Data </th>
                    <th> Valor (R$) </th>
                </thead>
                <tbody>
                    @foreach($customer->meals()->limit(5)->get() as $meal)
                        <tr>
                            <td> {{ $meal->date  }} </td>
                            <td> {{ $meal->price }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">Últimos Pagamentos</div>
            <table id="meals" class="table table-striped"  cellspacing="0" width="100%">
                <thead>
                    <th> Data </th>
                    <th> Valor (R$) </th>
                </thead>
                <tbody>
                    @foreach($customer->meals()->limit(5)->get() as $meal)
                        <tr>
                            <td> {{ $meal->date  }} </td>
                            <td> {{ $meal->price }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@include('transactions.index')
