<?php

class Veiculo extends BaseModel
{
	protected $table = 'veiculos';

    protected $fillable = array('modelo', 'proprietario', 'placa', 'ano', 'quilometragem', 'combustivel', 'marca', 'chassi', 'data_cotacao', 'preco', 'descricao');

	public static $rules = array(
        'modelo' => 'required|min:3|max:45',
        'proprietario' => 'required|min:3|max:60',
        'placa' => 'required|min:8|max:8',
        'ano' => 'required|integer',
        'quilometragem' => 'integer',
        'combustivel' => 'required|min:3|max:15',
        'marca' => 'required|min:3|max:20',
        'chassi' => 'required|min:3|max:30',
        'data_cotacao' => 'required|date_format:d/m/Y',
        'preco' => 'required|numeric',
        'descricao' => 'min:3',
    );

    public static function combustiveis()
    {
    	return array(
    		'' => 'Selecione uma opção',
    		'Diesel' => 'Diesel',
    		'Elétrico' => 'Elétrico',
    		'Etanol' => 'Etanol',
    		'Gás Natural' => 'Gás Natural',
    		'Gasolina' => 'Gasolina',
    		'Híbrido' => 'Híbrido',
    		'Hidrogênio' => 'Hidrogênio'
    	);
    }

    public static function marcas()
    {
    	return array(
    		'' => 'Selecione uma opção',
    		'Agrale' => 'Agrale',
    		'Aston Martin' => 'Aston Martin',
    		'Audi' => 'Audi',
    		'Bentley' => 'Bentley',
    		'BMW' => 'BMW',
    		'Changan' => 'Changan',
    		'Chery' => 'Chery',
    		'GM/Chevrolet' => 'GM/Chevrolet',
    		'Chrysler' => 'Chrysler',
    		'Citroën' => 'Citroën',
    		'Dodge' => 'Dodge',
    		'Effa' => 'Effa',
    		'Ferrari' => 'Ferrari',
    		'Fiat' => 'Fiat',
    		'Ford' => 'Ford',
    		'Geely' => 'Geely',
    		'Hafei' => 'Hafei',
    		'Honda' => 'Honda',
    		'Hyundai' => 'Hyundai',
    		'Jac Motors' => 'Jac Motors',
    		'Jaguar' => 'Jaguar',
    		'Jeep' => 'Jeep',
    		'Kia' => 'Kia',
    		'Lamborghini' => 'Lamborghini',
    		'Land Rover' => 'Land Rover',
    		'Lifan' => 'Lifan',
    		'Mahindra' => 'Mahindra',
    		'Maserati' => 'Maserati',
    		'Mercedes-Benz' => 'Mercedes-Benz',
    		'MG Motors' => 'MG Motors',
    		'Mini' => 'Mini',
    		'Mitsubishi' => 'Mitsubishi',
    		'Nissan' => 'Nissan',
    		'Peugeot' => 'Peugeot',
    		'Porsche' => 'Porsche',
    		'Ram' => 'Ram',
    		'Renault' => 'Renault',
    		'Smart' => 'Smart',
    		'Ssangyong' => 'Ssangyong',
    		'Subaru' => 'Subaru',
    		'Suzuki' => 'Suzuki',
    		'Toyota' => 'Toyota',
    		'Troller' => 'Troller',
    		'Volkswagen' => 'Volkswagen',
    		'Volvo' => 'Volvo'
    	);
    }

}