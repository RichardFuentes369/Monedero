@extends('app')

@section('content')
    @if(Auth::check() == false)
	<div id="index" class="row">
		<div class="col-sm-12">
			<br><br><br>
			<div class="row">
				<div class="col-sm-6" id="img-index">
				<br/><br/><br/><br/><br/><br/>
					<h3 id="title-index">Monedero es una app, la cual te permite realizar funciónes como: </h3>
					<hr>
					<ul class="list-group">
						<li class="list-group-item" id="cont-index"><h5>Llevar el control de tus gastos.</h5></li>
						<li class="list-group-item" id="cont-index"><h5>Acceder desde cualquier parte.</h5></li>
						<li class="list-group-item" id="cont-index"><h5>Controlar tus ingresos y egresos de una manera segura.</h5></li>
					</ul>
				</div>
				<div class="col-sm-6">
					<h3 id="title-index">¡Crear Usuario!</h3>
					<hr>
					<br/>
					@include('form.form-createuser')
				</div>
			</div>
		</div>
	</div>
	@else
	<div id="crud" class="row">
		<div class="col-sm-12">
			<div class="container">
				<br/><br/>
				@include('form.form-addcash')
				<center>
					<br/>
					<span><h3 id="title">Dinero en Cartera</h3></span>
					<input id="input-cash" type="number" readonly class="form-control" value="1800000">
				</center>
				<br><br>
				<div class="table-responsive-sm" >
					@include('table.table-movements')
				</div>
			</div>
		</div>
	</div>
	@endif
@endsection