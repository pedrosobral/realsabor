<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('name', 'Nome', ['for' => 'name']) !!}
            {!! Form::text('name', null, ['class' => 'form-control input', 'placeholder' => 'Nome completo'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('cpf', 'CPF') !!}
            {!! Form::number('cpf', null, ['class' => 'form-control'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
        {!! Form::label('company', 'Empresa') !!}
        {!! Form::select('company_id', $companies, null,['id' => 'companies_list', 'class' => 'form-control'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('phone1', 'Telefone') !!}
            {!! Form::number('phone1', null, ['class' => 'form-control'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('phone2', 'Celular') !!}
            {!! Form::number('phone2', null, ['class' => 'form-control'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('address1', 'Endereço') !!}
            {!! Form::text('address1', null, ['class' => 'form-control input'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('address2', 'Complemento') !!}
            {!! Form::text('address2', null, ['class' => 'form-control input'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('neighborhood', 'Bairro') !!}
            {!! Form::text('neighborhood', null, ['class' => 'form-control input'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('city', 'Cidade') !!}
            {!! Form::text('city', null, ['class' => 'form-control input'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('state', 'Estado') !!}
            {!! Form::text('state', null, ['class' => 'form-control input'])!!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('zip_code', 'CEP') !!}
            {!! Form::number('zip_code', null, ['class' => 'form-control'])!!}
        </div>
    </div>
</div>

<div class="form-group">
    <a href="{{URL::previous()}}" role="button" class="btn btn-default">Cancelar</a>
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
</div>
