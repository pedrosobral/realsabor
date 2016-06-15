<div class="page-header">
    <div class="btn-toolbar">
        <span class="headline">{{$customer->name}}</span>
        <button id="buceta" data-toggle="modal" data-target="#pagamento" class="btn btn-success pull-right " role="button">
            <span class="glyphicon glyphicon-cutlery"></span> Consumo
        </button>
        <button data-toggle="modal" data-target="#pagamento" class="btn btn-warning pull-right" role="button">
            <span class="glyphicon glyphicon-usd"></span> Pagamento
        </button>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <h2>CPF: {{ $customer->cpf }}</h2>
    </div>
    <h1>Refeiçoes</h1>
    <table id="meals" class="table table-striped"  cellspacing="0" width="100%">
        <thead>
            <th> Data </th>
            <th> Valor (R$) </th>
        </thead>
        <tbody>
            @foreach($customer->meals as $meal)
                <tr>
                    <td> {{ $meal->date  }} </td>
                    <td> {{ $meal->price }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('transactions.index');
