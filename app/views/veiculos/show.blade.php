@extends('layouts.admin')

@section('content')
	<h4>
		<span class="glyphicon glyphicon-info-sign"></span> Detalhes do veículo
		<a href="{{ URL::to('veiculo') }}" class="btn btn-info navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
	</h4>
	<hr>
	<div class="jumbotron">
        <h2>{{ e($veiculo->modelo) . ' ' . $veiculo->ano }}</h2>
        <p><strong>Proprietário:</strong> {{ e($veiculo->proprietario) }}</p>
        <p><strong>Placa:</strong> {{ e($veiculo->placa) }}</p>
        <p><strong>Quilometragem:</strong> {{ Util::number($veiculo->quilometragem, 0) }} Km</p>
        <p><strong>Combustível:</strong> {{ e($veiculo->combustivel) }}</p>
        <p><strong>Marca:</strong> {{ e($veiculo->marca) }}</p>
        <p><strong>Chassi:</strong> {{ e($veiculo->chassi) }}</p>
        <p><strong>Data de cotação:</strong> {{ Util::toView($veiculo->data_cotacao) }}</p>
        <p><strong>Preço:</strong> R$ {{ Util::number($veiculo->preco, 2) }}</p>
        <p><strong>Descrição:</strong> {{ $veiculo->descricao }}</p>
        <p><strong>Criado:</strong> {{ Util::toTimestamps($veiculo->created_at) }}</p>
        <p><strong>Modificado:</strong> {{ Util::toTimestamps($veiculo->updated_at) }}</p>
    </div>
@stop