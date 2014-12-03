<?php

class AcaoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('acoes')->delete();

		Acao::create(array('nome' => 'Acesso total do sistema', 'metodo' => '*'));

		Acao::create(array('nome' => 'Listar veículos', 'metodo' => 'veiculo.index'));
		Acao::create(array('nome' => 'Detalhar veículo', 'metodo' => 'veiculo.show'));
		Acao::create(array('nome' => 'Formulário de inclusão de veículo', 'metodo' => 'veiculo.create'));
		Acao::create(array('nome' => 'Adicionar veículo', 'metodo' => 'veiculo.store'));
		Acao::create(array('nome' => 'Formulário de alteração de veículo', 'metodo' => 'veiculo.edit'));
		Acao::create(array('nome' => 'Alterar veículo', 'metodo' => 'veiculo.update'));
		Acao::create(array('nome' => 'Apagar veículo', 'metodo' => 'veiculo.destroy'));

	}

}