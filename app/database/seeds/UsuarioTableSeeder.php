<?php

class UsuarioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('usuarios')->delete();

		Usuario::create(array(
			'nome' => 'Administrador',
			'username' => 'admin',
			'password' => Hash::make('admin2014'),
			'email' => 'admin@autenticacao.net',
			'ativo' => 1,
			'perfil_id' => 1,
		));
	}

}