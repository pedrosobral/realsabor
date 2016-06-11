@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2>Novo Cliente</h2>
        {!! Form::open() !!}
          <div class="form-group">
            {!! Form::label('name', 'Nome:', ['for' => 'name']) !!}
            {!! Form::text('name', null, ['class' => 'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::label('company', 'Empresa:') !!}
            {!! Form::text('company', null, ['class' => 'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::label('adress', 'Endereço:') !!}
            {!! Form::text('adress', null, ['class' => 'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::label('phone', 'Telefone:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::label('cpf', 'C.P.F.:') !!}
            {!! Form::text('cpf', null, ['class' => 'form-control'])!!}
          </div>
          <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

@endsection
