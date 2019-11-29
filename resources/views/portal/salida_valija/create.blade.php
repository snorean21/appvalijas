@extends('layouts.interface')
@section('title', 'Nuevo Registro')

@section('page-heading')
    <h1 class="h3 mb-0 text-gray-800">Nuevo Registro Salida Valija</h1>
@stop

@section('content')
	<div class="col">
        <div class="card shadow mb-4 w-75" style="align-content: center;">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Creando nuevo registro en la base de datos</h6>
            </div>
            <div class="card-body">
            	{!! Form::open(['route'=>'store', 'method'=>'POST', 'class'=>'form-group']) !!}
					<div class="form-group row">
						{!! Form::label('salida_valijas_numero', 'Numero de la Valija', ['class' => 'col-sm-4 col-form-label']) !!}
					    <div class="col-sm-8">
							{!! Form::number('salida_valijas_numero', null, ['class' => 'form-control']) !!}
					    </div>
					</div>
						<a href="{{ route('index') }}" role="button" class="btn btn-secondary">Volver al inicio</a>
						{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-danger'])!!}
				{!! Form::close() !!}
            </div>
        </div>
    </div>
@stop