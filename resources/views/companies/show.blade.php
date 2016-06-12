<div class="page-header">
    <h1>{{$company->name}}</h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <h1>Funcionários</h1>
        @foreach($company->customers as $customer)
            <a href="javascript:void(0);" value="{{$customer->id}}" class="company">
                {{ $customer->name }}
            </a><br>
        @endforeach
    </div>
</div>
