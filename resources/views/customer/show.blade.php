<div class="page-header">
    <h1>{{$customer->name}}
        <a href="{!! route('customer.create') !!}" class="btn btn-primary pull-right" role="button">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Novo Lançamento
        </a>
    </h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <h2>CPF: {{$customer->cpf}}</h2>
    </div>
</div>
