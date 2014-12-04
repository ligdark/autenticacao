@extends('layouts.admin')

@section('content')
    @if(Session::has('flash_error'))
        <div class="alert alert-danger alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	{{ Session::get('flash_error') }}
        </div>
    @endif

    @if(Session::has('flash_notice'))
        <div class="alert alert-info alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	{{ Session::get('flash_notice') }}
        </div>
    @endif

    {{ Form::open(array('url' => 'login', 'class' => 'form-signin')) }}
    	<h2 class="form-signin-heading">Autenticação</h2>
    	{{ Form::text('username', Input::old('username'), array('placeholder' => 'Usuário', 'class' => 'form-control', 'required', 'autofocus')) }}
    	{{ Form::password('password', array('placeholder' => 'Senha', 'class' => 'form-control', 'required')) }}
    	{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg btn-block')) }}
    {{ Form::close() }}
@stop