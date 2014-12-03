@extends('layouts.admin')

@section('content')
	<h4>
		<span class="glyphicon glyphicon-list-alt"></span> Listagem de veículos
		<a href="{{ URL::to('veiculo/create') }}" class="btn btn-success navbar-right"><span class="glyphicon glyphicon-plus-sign"></span> Novo</a>
	</h4>
	<hr>
	{{ Form::open(array('url' => 'veiculo', 'method' => 'get', 'class' => 'form-inline', 'role' => 'form')) }}
		<div class="form-group">
			{{ Form::text('modelo', $modelo, array('placeholder' => 'Modelo', 'class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::text('combustivel', $combustivel, array('placeholder' => 'Combustível', 'class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::text('marca', $marca, array('placeholder' => 'Marca', 'class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::text('descricao', $descricao, array('placeholder' => 'Descrição', 'class' => 'form-control')) }}
		</div>
		{{ Form::button('<span class="glyphicon glyphicon-search"></span> Pesquisar', array('type' => 'submit', 'class' => 'btn btn-default')) }}
	{{ Form::close() }}
	<hr>
	@if($veiculos->getItems())
		Exibindo de {{ $veiculos->getFrom() }} até {{ $veiculos->getTo() }} de {{ $veiculos->getTotal() }} registros.
		<hr>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th><a href="{{ URL::to('veiculo?sort=modelo' . $str) }}">Modelo</a></th>
					<th><a href="{{ URL::to('veiculo?sort=combustivel' . $str) }}">Combustível</a></th>
					<th><a href="{{ URL::to('veiculo?sort=marca' . $str) }}">Marca</a></th>
					<th><a href="{{ URL::to('veiculo?sort=proprietario' . $str) }}">Proprietário</a></th>
					<th><a href="{{ URL::to('veiculo?sort=descricao' . $str) }}">Descrição</a></th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($veiculos as $veiculo)
					<tr>
						<td>{{ e($veiculo->modelo) }}</td>
						<td>{{ e($veiculo->combustivel) }}</td>
						<td>{{ e($veiculo->marca) }}</td>
						<td>{{ e($veiculo->proprietario) }}</td>
						<td>{{ e(Util::truncate($veiculo->descricao, 100)) }}</td>
						<td class="action">{{ link_to('veiculo/' . $veiculo->id, 'Detalhar', array('class' => 'btn btn-info btn-sm', 'title' => 'Detalhar')) }}</td>
						<td class="action">{{ link_to('veiculo/' . $veiculo->id . '/edit', 'Editar', array('class' => 'btn btn-primary btn-sm', 'title' => 'Editar')) }}</td>
						<td class="action">
							{{ Form::open(array('url' => 'veiculo/' . $veiculo->id, 'method' => 'delete', 'data-confirm' => 'Deseja realmente excluir o registro selecionado?')) }}
								{{ Form::button('Apagar', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'title' => 'Apagar')) }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $pagination }}
	@else
		<p class="text-danger"><strong>{{ Util::message('MSG011') }}</strong></p>
	@endif
@stop