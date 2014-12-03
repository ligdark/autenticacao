@extends('layouts.admin')

@section('content')
	<h4>
		<span class="glyphicon glyphicon-plus-sign"></span> Adicionar novo veículo
		<a href="{{ URL::to('veiculo') }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
	</h4>
	<hr>
	{{ Form::open(array('url' => 'veiculo', 'class' => 'form-horizontal row', 'role' => 'form')) }}

		<div class="col-xs-5 {{ $errors->first('modelo') ? 'has-error' : '' }}">
			{{ Form::label('modelo', '* Modelo', array('class' => 'control-label')) }}
        	{{ Form::text('modelo', Input::old('modelo'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('modelo', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-7 {{ $errors->first('proprietario') ? 'has-error' : '' }}">
			{{ Form::label('proprietario', '* Proprietário', array('class' => 'control-label')) }}
        	{{ Form::text('proprietario', Input::old('proprietario'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('proprietario', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('placa') ? 'has-error' : '' }}">
			{{ Form::label('placa', '* Placa', array('class' => 'control-label')) }}
        	{{ Form::text('placa', Input::old('placa'), array('data-mask' => 'AAA-9999', 'class' => 'form-control', 'required')) }}
        	{{ $errors->first('placa', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('ano') ? 'has-error' : '' }}">
			{{ Form::label('ano', '* Ano', array('class' => 'control-label')) }}
        	{{ Form::text('ano', Input::old('ano'), array('data-mask' => '9999', 'class' => 'form-control', 'required')) }}
        	{{ $errors->first('ano', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('quilometragem') ? 'has-error' : '' }}">
			{{ Form::label('quilometragem', 'Quilometragem', array('class' => 'control-label')) }}
        	{{ Form::text('quilometragem', Input::old('quilometragem'), array('data-mask' => '#', 'data-mask-reverse' => 'true', 'data-mask-maxlength' => 'false', 'class' => 'form-control', 'required')) }}
        	{{ $errors->first('quilometragem', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('combustivel') ? 'has-error' : '' }}">
			{{ Form::label('combustivel', '* Combustível', array('class' => 'control-label')) }}
			{{ Form::select('combustivel', Veiculo::combustiveis(), Input::old('combustivel'), array('class' => 'form-control', 'required')) }}
			{{ $errors->first('combustivel', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('marca') ? 'has-error' : '' }}">
			{{ Form::label('marca', '* Marca', array('class' => 'control-label')) }}
			{{ Form::select('marca', Veiculo::marcas(), Input::old('marca'), array('class' => 'form-control select2', 'required')) }}
			{{ $errors->first('marca', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('chassi') ? 'has-error' : '' }}">
			{{ Form::label('chassi', '* Chassi', array('class' => 'control-label')) }}
        	{{ Form::text('chassi', Input::old('chassi'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('chassi', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('data_cotacao') ? 'has-error' : '' }}">
			{{ Form::label('data_cotacao', '* Data de cotação', array('class' => 'control-label')) }}
			<div class="input-group date">
	        	{{ Form::text('data_cotacao', Input::old('data_cotacao'), array('data-mask' => '99/99/9999', 'class' => 'form-control', 'required')) }}
	        	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	        </div>
        	{{ $errors->first('data_cotacao', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-3 {{ $errors->first('preco') ? 'has-error' : '' }}">
			{{ Form::label('preco', '* Preço', array('class' => 'control-label')) }}
        	{{ Form::text('preco', Input::old('preco'), array('data-mask' => '###0.00', 'data-mask-reverse' => 'true', 'data-mask-maxlength' => 'false', 'class' => 'form-control', 'required')) }}
        	{{ $errors->first('preco', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-12 pull-left {{ $errors->first('descricao') ? 'has-error' : '' }}">
			{{ Form::label('descricao', 'Descrição', array('class' => 'control-label')) }}
        	{{ Form::textarea('descricao', Input::old('descricao'), array('class' => 'form-control')) }}
        	{{ $errors->first('descricao', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-btn">
			{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
		</div>

	{{ Form::close() }}
@stop
