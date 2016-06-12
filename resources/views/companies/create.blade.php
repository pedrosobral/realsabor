@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Nova Empresa</div>
          <div class="panel-body">
            {!! Form::open(['route' => 'companies.store']) !!}
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  {!! Form::label('name', 'Nome:', ['for' => 'name']) !!}
                  {!! Form::text('name', null, ['class' => 'form-control'])!!}
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  {!! Form::label('cnpj', 'CNPJ:') !!}
                  {!! Form::text('cnpj', null, ['class' => 'form-control'])!!}
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('address1', 'Endereço:') !!}
                    {!! Form::text('address1', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('address2', 'Complemento:') !!}
                    {!! Form::text('address2', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('neighborhood', 'Bairro:') !!}
                    {!! Form::text('neighborhood', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    {!! Form::label('city', 'Cidade:') !!}
                    {!! Form::text('city', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('state', 'Estado:') !!}
                    {!! Form::text('state', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('zip_code', 'CEP:') !!}
                    {!! Form::text('zip_code', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('phone1', 'Telefone:') !!}
                    {!! Form::text('phone1', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {!! Form::label('phone2', 'Celular:') !!}
                    {!! Form::text('phone2', null, ['class' => 'form-control'])!!}
                  </div>
                </div>
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

  {{-- @section('footer')
  <script>
  $('#companies_list').select2({
  placeholder: "Selecione uma empresa",
  allowClear: true
});
</script>
@endsection --}}
