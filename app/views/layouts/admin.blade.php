<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Autenticação</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{{ HTML::style('assets/css/bootstrap.min.css') }}
		{{ HTML::script('assets/js/jquery-2.0.3.min.js', array('defer' => 'defer')) }}
		{{ HTML::script('assets/js/bootstrap.min.js', array('defer' => 'defer')) }}
		{{ HTML::style('assets/css/datepicker.css') }}
		{{ HTML::style('assets/css/select2.css') }}
		{{ HTML::style('assets/css/select2-bootstrap.css') }}
		{{ HTML::style('assets/css/admin.css') }}
		{{ HTML::script('assets/js/bootstrap-datepicker.js', array('defer' => 'defer')) }}
		{{ HTML::script('assets/js/bootstrap-datepicker.pt-BR.js', array('defer' => 'defer')) }}
		{{ HTML::script('assets/js/select2.min.js', array('defer' => 'defer')) }}
		{{ HTML::script('assets/js/select2_locale_pt-BR.js', array('defer' => 'defer')) }}
		{{ HTML::script('assets/js/jquery.mask.min.js', array('defer' => 'defer')) }}
		{{ HTML::script('assets/js/main.js', array('defer' => 'defer')) }}
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
      		<div class="container">
	        	@include('partials._navigation')
      		</div>
    	</div>
    	<div class="container">
    		{{ HTML::flash_message() }}
    		@yield('content')
    	</div>
	</body>
</html>