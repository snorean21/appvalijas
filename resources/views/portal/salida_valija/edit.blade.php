@extends('layouts.interface')

@section('page-heading')
    <h1 class="h3 mb-0 text-gray-800">Modificar datos de la valija numero {{ $salidas->salida_valijas_numero }} </h1>
@stop

@section('content')
	<div class="col">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::model($salidas, ['route'=>['edit.update', $salidas->id], 'method'=>'PUT', 'class'=>'form-group']) !!}
                        <table class="table table-striped table-bordered">
                            <thead align="center">
                                <tr>
                                    <th>NUMERO DE LA VALIJA</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                    <tr>
                                        <td>
                                            {!! Form::text('salida_valijas_numero', null, ['class' => 'form-control text-center', 'disabled']) !!}
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('index') }}" role="button" class="btn btn-secondary">Volver al inicio</a>
                        {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-danger'])!!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop