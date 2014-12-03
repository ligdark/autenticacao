<?php

class VeiculosController extends BaseController {

	protected $veiculo;

	public function __construct(Veiculo $veiculo)
    {
        parent::__construct();
        $this->veiculo = $veiculo;
    }

    public function index()
    {
        $modelo = $combustivel = $marca = $descricao = null;

        $fields = array('modelo', 'combustivel', 'marca', 'proprietario', 'descricao');
        $sort = in_array(Input::get('sort'), $fields) ? Input::get('sort') : 'modelo';
        $order = Input::get('order') === 'desc' ? 'desc' : 'asc';

        $veiculos = $this->veiculo->orderBy($sort, $order);

        if(Input::has('modelo')) {
            $veiculos = $veiculos->where('modelo', 'LIKE', "%". Input::get('modelo') ."%");
            $modelo = '&modelo='. Input::get('modelo');
        }

        if(Input::has('combustivel')) {
            $veiculos = $veiculos->where('combustivel', 'LIKE', "%". Input::get('combustivel') ."%");
            $combustivel = '&combustivel='. Input::get('combustivel');
        }

        if(Input::has('marca')) {
            $veiculos = $veiculos->where('marca', 'LIKE', "%". Input::get('marca') ."%");
            $marca = '&marca='. Input::get('marca');
        }

        if(Input::has('descricao')) {
            $veiculos = $veiculos->where('descricao', 'LIKE', "%". Input::get('descricao') ."%");
            $descricao = '&descricao='. Input::get('descricao');
        }

        $veiculos = $veiculos->paginate(15);

        $pagination = $veiculos->appends(array(
            'modelo' => Input::get('modelo'),
            'combustivel' => Input::get('combustivel'),
            'marca' => Input::get('marca'),
            'descricao' => Input::get('descricao'),
            'sort' => Input::get('sort'),
            'order' => Input::get('order')
        ))->links();

        return View::make('veiculos.index')
            ->with(array(
                'modelo' => Input::get('modelo'),
                'combustivel' => Input::get('combustivel'),
                'marca' => Input::get('marca'),
                'descricao' => Input::get('descricao'),
                'veiculos' => $veiculos,
                'pagination' => $pagination,
                'str' => '&order='.(Input::get('order') == 'asc' || null ? 'desc' : 'asc') . $modelo . $combustivel . $marca . $descricao
        ));
    }

    public function show($id)
    {
        try {
            $veiculo = $this->veiculo->findOrFail($id);
            return View::make('veiculos.show', compact('veiculo'));
        } catch(ModelNotFoundException $e) {
            return Redirect::to('veiculo')
                ->with('danger', Util::message('MSG003'));
        }
    }

    public function create()
    {
        return View::make('veiculos.create');
    }

    public function store()
    {
        $input = Input::all();
        $validator = $this->veiculo->validate($input);

        if($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('danger', Util::message('MSG001'));
        } else {
            $input['data_cotacao'] = Util::toMySQL(Input::get('data_cotacao'));
            $this->veiculo->create($input);

            return Redirect::to('veiculo')
                ->with('success', Util::message('MSG002'));
        }
    }

    public function edit($id)
    {
        try {
            $veiculo = $this->veiculo->findOrFail($id);
            return View::make('veiculos.edit', compact('veiculo'));
        } catch(ModelNotFoundException $e) {
            return Redirect::to('veiculo')
                ->with('danger', Util::message('MSG003'));
        }
    }

    public function update($id)
    {
        $input = Input::all();
        $validator = $this->veiculo->validate($input);

        if($validator->fails()){
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('danger', Util::message('MSG004'));
        } else {
            $input['data_cotacao'] = Util::toMySQL(Input::get('data_cotacao'));
            $this->veiculo->find($id)->update($input);

            return Redirect::to('veiculo')
                ->with('success', Util::message('MSG005'));
        }
    }

    public function destroy($id)
    {
        try {
            $this->veiculo->find($id)->delete();
            return Redirect::to('veiculo')
                ->with('success', Util::message('MSG006'));
        } catch (Exception $e) {
            return Redirect::to('veiculo')
                ->with('warning', Util::message('MSG007'));
        }
    }

}