@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Novo Cliente</div>
          <div class="panel-body">
            {!! Form::open(['route' => 'customers.store']) !!}
              <div class="form-group">
                {!! Form::label('name', 'Nome:', ['for' => 'name']) !!}
                {!! Form::text('name', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('company', 'Empresa:') !!}
                {!! Form::select('company_id', $companies, null,['id' => 'companies_list', 'class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('address1', 'Endereço:') !!}
                {!! Form::text('address1', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('address2', 'Complemento:') !!}
                {!! Form::text('address2', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('neighborhood', 'Bairro:') !!}
                {!! Form::text('neighborhood', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('city', 'Cidade:') !!}
                {!! Form::text('city', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('state', 'Estado:') !!}
                {!! Form::text('state', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('zip_code', 'CEP:') !!}
                {!! Form::text('zip_code', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('phone1', 'Telefone:') !!}
                {!! Form::text('phone1', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('phone2', 'Celular:') !!}
                {!! Form::text('phone2', null, ['class' => 'form-control'])!!}
              </div>
              <div class="form-group">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer')
    <script>
        $('#companies_list').select2({
            placeholder: "Selecione uma empresa",
            allowClear: true
        });
    </script>
@endsection
