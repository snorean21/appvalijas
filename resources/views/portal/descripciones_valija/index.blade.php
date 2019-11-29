@extends('layouts.interface')

@section('page-heading')
    <h1 class="h3 mb-0 text-gray-800">Salida de Valija</h1>
@stop

@section('content')
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Registros ingresados en la base de datos</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Nuevo Registro Salida Valija</span>
                </a><hr>
                <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered">
                        <thead align="center">
                            <tr>
                                <th>NUMERO DE LA VALIJA</th>
                                <th>FECHA Y HORA DE SALIDA VALIJA</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @foreach( $salidas as $salida )
                                <tr>
                                    <td>{{ $salida->salida_valijas_numero }}</td>
                                    <td>{{ $salida->created_at }}</td>
                                    <td>
                                        <a href="{{ route('ver.show', $salida->id) }}" role="button" class="btn btn-primary">
                                            <i class="fas fa-eye fa-sm"></i>
                                        </a>
                                        {!! Form::open([
                                            'route'=>['destroy', $salida->id],
                                            'method'=>'DELETE',
                                            'class'=>'d-inline']) !!}
                                                {!! Form::button(
                                                    '<i class="fas fa-trash-alt fa-sm"></i>',
                                                    ['type'=>'submit','class'=>'btn btn-danger']
                                                ) !!}
                                        {!! Form::close() !!}
                                        <button class="btn btn-danger fa fa-file-pdf"></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop