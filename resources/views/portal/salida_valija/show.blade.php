@extends('layouts.interface')

@section('page-heading')
    <h1 class="h3 mb-0 text-gray-800">Detalles de la valija numero {{ $salidas->salida_valijas_numero }} </h1>
@stop

@section('content')
	<div class="col">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead align="center">
                            <tr >
                                <th style="width: 70%">DESCRIPCION</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                                <tr>
                                    <td>Aca va la descripcion de la valija</td>
                                    <td>
                                    	<a href="{{route('modify.edit', $salidas->id)}}" class="btn btn-warning" role="button">
                                            <i class="fas fa-pen-square fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('index') }}" role="button" class="btn btn-secondary">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
@stop