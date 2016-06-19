<div class="modal fade" id="meal_modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Novo Consumo</h4>
            </div>
            <div class="modal-body">
                {!! Form::open([ 'id' => 'meal_form']) !!}
                <div class="row">
                    <input id="meal_id" type="hidden" value="{{$customer->id}}">
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
                            {!! Form::label('meal_date', 'Data') !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </div>
                                {!! Form::date('meal_date',  \Carbon\Carbon::now(), ['class' => 'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('meal_price', 'Valor') !!}
                            <div class="input-group">
                                <div class="input-group-addon">R$</div>
                                {!! Form::number('meal_price', null, ['class' => 'form-control', 'autofocus', 'step' => 'any']) !!}
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
    $('#meal_form').submit(function(e) {
        $('#meal_modal').modal('toggle');
        $('#meal_modal').modal('hide');

        e.preventDefault();
        var id    = $('#meal_id').val();
        var date  = $('#meal_date').val();
        var price = $('#meal_price').val();

        $.ajax({
            type: 'POST',
            url : "{{ route('customer.meal') }}",
            data: {
                id: id, date: date, price: price,
                _token: '{{ Session::token() }}'
            },
            success: function(data){
                if (window.location.pathname === "/customer") {
                    refresh(id, 'Consumo cadastrado!');
                } else {
                    location.reload();
                }
            },
            error: function(){
                console.error('transactions.index.blade.php');
            }
        });
    });

    function refresh(id, msg) {
        $.ajax({
            url: 'customer/details/' + id,
            success: function(data) {
                $('#details').html(data);
                toastr.success(msg);
            },
            error: function() {
                toastr.erro('Ops... ocorreu algum erro!');
                console.error('customer.index.blade.php');
            },
        });
    }
</script>
