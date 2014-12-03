<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
	{{ link_to('/', 'Autenticação', array('class' => 'navbar-brand')) }}
</div>
<div class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
        <li>{{ link_to('veiculo', 'Veículos') }}</li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
        <li></li>
    </ul>
</div>