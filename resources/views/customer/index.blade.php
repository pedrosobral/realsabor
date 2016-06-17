@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <div class="page-header">
                    <h3>Clientes
                        <a href="{!! route('customer.create') !!}" class="btn btn-primary pull-right" role="button">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Novo Cliente
                        </a>
                    </h3>
                </div>
                <table id="customers" class="table table-striped"  cellspacing="0" width="100%">
                    <thead>
                        <th> Nome </th>
                        <th> CPF </th>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" value="{{$customer->id}}" class="customer">
                                        {{ $customer->name }}
                                    </a>
                                </td>
                                <td> {{ $customer->cpf }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-md-7 details">

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @if(session('status'))
        <script type="text/javascript">
            toastr.success('{{session('status')}}');
        </script>
    @endif
    <script>
    $('.customer').click(function(){
        var id = $(this).attr('value');
        $.ajax({
            url: 'customer/' + id,
            success: function(data){
                $('.details').html(data);
            },
            error: function(){
                console.error('customer.index.blade.php');
            },
        });
    });
    </script>
@endsection
