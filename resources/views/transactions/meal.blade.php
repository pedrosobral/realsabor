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
                    <input id="_id" type="hidden" value="{{$customer->id}}">
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label('name', 'Nome', ['for' => 'name']) !!}
                            {!! Form::text('name', $customer->name, ['class' => 'form-control', 'placeholder' => 'Nome completo', 'disabled'])!!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('cpf', 'CPF', ['for' => 'cpf']) !!}
                            {!! Form::text('cpf', $customer->cpf, ['class' => 'form-control', 'disabled'])!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('date', 'Data', ['for' => 'data']) !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </div>
                                {!! Form::date('date',  \Carbon\Carbon::now(), ['class' => 'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('value', 'Valor', ['for' => 'price']) !!}
                            <div class="input-group">
                                <div class="input-group-addon">R$</div>
                                {!! Form::number('value', null, ['class' => 'form-control', 'autofocus', 'step' => 'any']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar Pagamento</button>
                    {!! Form::submit('Salvar Pagamento', ['class' => 'btn btn-primary', 'id' => 'submit']) !!}
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
        var id    = $('#_id').val();
        var date  = $('#date').val();
        var value = $('#value').val();

        $.ajax({
            type: 'POST',
            url : "{{ route('customer.payment') }}",
            data: {
                id: id, date: date, value: value,
                _token: '{{ Session::token() }}'
            },
            success: function(data){
                refresh(id, 'Pagamento salvo!'); // from transactions.show.blade.php
            },
            error: function(){
                console.error('transactions.index.blade.php');
            }
        });
    });
</script>
