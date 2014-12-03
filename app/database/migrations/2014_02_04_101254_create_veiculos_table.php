<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('veiculos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('modelo', 45);
			$table->string('proprietario', 60);
			$table->string('placa', 8);
			$table->integer('ano');
			$table->bigInteger('quilometragem')->nullable();
			$table->string('combustivel', 15);
			$table->string('marca', 20);
			$table->string('chassi', 30);
			$table->date('data_cotacao');
			$table->decimal('preco', 10, 2);
			$table->text('descricao')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('veiculos');
	}

}
