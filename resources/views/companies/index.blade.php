@extends('layouts.app')

@section('content')
  {{-- {!! Html::style('../../assets\css\style.css') !!} --}}
  {{-- <link type="text/css" rel="stylesheet" href="../../assets\css\style.css"> --}}
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Empresas</div>
          <div class="panel-body">
            @foreach($companies as $company)
                <h4>{{ $company->name }}</h4>
            @endforeach
            <h1 id="pop">POPOZAO</h1>
            {!! Form::submit('Nova Empresa', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
