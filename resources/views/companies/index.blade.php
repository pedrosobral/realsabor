@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <div class="page-header">
                    <h1>Empresas</h1>
                </div>
                <table id="customers" class="table table-striped"  cellspacing="0" width="100%">
                    <thead>
                        <th> Nome </th>
                        <th> Funcionários </th>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" value="{{$company->id}}" class="company">
                                        {{ $company->name }}
                                    </a>
                                </td>
                                <td> {{ $company->customers()->count() }} </td>
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
    <script>
    $('.company').click(function(){
        var id = $(this).attr('value');
        $.ajax({
            url: 'companies/' + id,
            success: function(data){
                $('.details').html(data);
            },
            error: function(){
                console.error('companies.index.blade.php');
            },
        });
    });
    </script>
@endsection
