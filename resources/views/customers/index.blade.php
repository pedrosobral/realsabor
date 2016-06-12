@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Clientes</div>
          <div class="panel-body">
            @foreach($customers as $customer)
              <h4>{{ $customer->name }}</h4>
            @endforeach
            {!! Form::submit('Novo Cliente', ['class' => 'btn btn-primary']) !!}
          </div>
      </div>
    </div>
  </div>
@endsection
