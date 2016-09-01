<div class="modal fade" id="payment_modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Novo Pagamento</h4>
            </div>
            <div class="modal-body">
                {!! Form::open([ 'id' => 'payment_form']) !!}
                <div class="row">
                    <input id="payment_id" type="hidden" value="{{$customer->id}}">
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label('name', 'Nome') !!}
                            {!! Form::text('name', $customer->name, ['class' => 'form-control', 'placeholder' => 'Nome completo', 'disabled'])!!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('cpf', 'CPF') !!}
                            {!! Form::text('cpf', $customer->cpf, ['class' => 'form-control', 'disabled'])!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('payment_date', 'Data') !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </div>
                                {!! Form::date('payment_date',  \Carbon\Carbon::now(), ['class' => 'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('payment_value', 'Valor') !!}
                            <div class="input-group">
                                <div class="input-group-addon">R$</div>
                                {!! Form::number('payment_value', null, ['class' => 'form-control', 'autofocus', 'step' => 'any']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<script>
    $('#payment_form').submit(function(e) {
        $('#payment_modal').modal('toggle');
        $('#payment_modal').modal('hide');

        e.preventDefault();
        var id    = $('#payment_id').val();
        var date  = $('#payment_date').val();
        var value = $('#payment_value').val();

        $.ajax({
            type: 'POST',
            url : "{{ route('customer.payment') }}",
            data: {
                id: id, date: date, value: value,
                _token: '{{ Session::token() }}'
            },
            success: function(data) {
                if (window.location.pathname === "/customer") {
                    refresh(id, 'Pagamento salvo!'); // from transactions.show.blade.php
                } else {
                    location.reload();
                }
            },
            error: function(){
                console.error('transactions.index.blade.php');
            }
        });
    });
</script>
