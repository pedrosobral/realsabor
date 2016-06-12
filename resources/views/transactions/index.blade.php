@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lançamentos</div>
                    <div class="panel-body">
                      <div class="col-md-12">
                        <div class="col-md-6">
                          <a class="btn btn-primary btn-block" role="button">
                              <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                              Consumo
                          </a>
                        </div>
                        <div class="col-md-6">
                          <a class="btn btn-primary btn-block" role="button">
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                              Pagamento
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
