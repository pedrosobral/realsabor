<div class="page-header">
    <h1>{{$company->name}}</h1>
</div>

<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-success panel-saldo">
            <div class="panel-heading">
                <h4 class="panel-title">Saldo</h4>
            </div>
            <div class="panel-body">
                <div class="stats">
                    <div class="stats-number">R$ {{number_format(floatval($company->getTotalCustomersBalance()), 2, ',', '.')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <table class="datatables table table-striped">
          <thead>
            <tr>
              <th> Nome </th>
              <th> CPF </th>
              <th> Total (R$) </th>
            </tr>
          </thead>
          <tbody>
            @foreach($company->customers as $customer)
              <tr>
                <td> <a href="{{route('customer.show', $customer->id)}}"> {{$customer->name}}</a> </td>
                <td> {{$customer->cpf}} </td>
                <td> {{number_format(floatval($customer->balance()), 2, ',', '.')}} </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
