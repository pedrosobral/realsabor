@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Lançamentos</div>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="col-md-6">
              <a class="btn btn-primary btn-block" data-toggle="modal" role="button">
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Consumo
              </a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#pagamento" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Pagamento
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="pagamento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="pag" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="pag">Pagamento</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="inputEmail3">Cliente</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="inputPassword3">Valor</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
