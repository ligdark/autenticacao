<?php

class AcaoTableSeeder extends Seeder {

    public function run()
    {
  //       DB::table('acoes')->delete();

		// Acao::create(array('nome' => 'Acesso total do sistema', 'metodo' => '*'));

		// Acao::create(array('nome' => 'Listar veículos', 'metodo' => 'veiculo.index'));
		// Acao::create(array('nome' => 'Detalhar veículo', 'metodo' => 'veiculo.show'));
		// Acao::create(array('nome' => 'Formulário de inclusão de veículo', 'metodo' => 'veiculo.create'));
		// Acao::create(array('nome' => 'Adicionar veículo', 'metodo' => 'veiculo.store'));
		// Acao::create(array('nome' => 'Formulário de alteração de veículo', 'metodo' => 'veiculo.edit'));
		// Acao::create(array('nome' => 'Alterar veículo', 'metodo' => 'veiculo.update'));
		// Acao::create(array('nome' => 'Apagar veículo', 'metodo' => 'veiculo.destroy'));

		Acao::create(array('nome' => 'Listar usuários', 'metodo' => 'usuario.index'));
		Acao::create(array('nome' => 'Formulário de inclusão de usuário', 'metodo' => 'usuario.create'));
		Acao::create(array('nome' => 'Adicionar usuário', 'metodo' => 'usuario.store'));
		Acao::create(array('nome' => 'Formulário de alteração de usuário', 'metodo' => 'usuario.edit'));
		Acao::create(array('nome' => 'Alterar usuário', 'metodo' => 'usuario.update'));
		Acao::create(array('nome' => 'Apagar usuário', 'metodo' => 'usuario.destroy'));

		Acao::create(array('nome' => 'Listar perfis', 'metodo' => 'perfil.index'));
		Acao::create(array('nome' => 'Formulário de inclusão de perfil', 'metodo' => 'perfil.create'));
		Acao::create(array('nome' => 'Adicionar perfil', 'metodo' => 'perfil.store'));
		Acao::create(array('nome' => 'Formulário de alteração de perfil', 'metodo' => 'perfil.edit'));
		Acao::create(array('nome' => 'Alterar perfil', 'metodo' => 'perfil.update'));
		Acao::create(array('nome' => 'Apagar perfil', 'metodo' => 'perfil.destroy'));

	}

}