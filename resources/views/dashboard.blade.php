@extends('app')

@section('content')
    @if(Auth::check() == false)
	<div id="index" class="row">
		<div class="col-sm-12">
			<br><br><br>
			<div class="row">
				<div class="col-sm-6" style="background-image: url('img/pig.png'); background-repeat: no-repeat;">
				<br/><br/><br/><br/><br/><br/><br/>
					<h3 style="-webkit-text-fill-color: #EAD9D9;-webkit-text-stroke: 0.5px #EAD9D9;">Monedero es una app, la cual te permite realizar funciónes como: </h3>
					<hr>
					<ul class="list-group">
						<li class="" style="-webkit-text-fill-color: #EAD9D9;-webkit-text-stroke: 0.5px #EAD9D9;"><h5>Llevar el control de tus gastos.</h5></li>
						<li class="" style="-webkit-text-fill-color: #EAD9D9;-webkit-text-stroke: 0.5px #EAD9D9;"><h5>Acceder desde cualquier parte.</h5></li>
						<li class="" style="-webkit-text-fill-color: #EAD9D9;-webkit-text-stroke: 0.5px #EAD9D9;"><h5>Controlar tus ingresos y egresos de una manera segura.</h5></li>
					</ul>
				</div>
				<div class="col-sm-6">
					<h3 style="-webkit-text-fill-color: #EAD9D9;-webkit-text-stroke: 0.5px #EAD9D9;">¡Crear Usuario!</h3>
					<hr>
					<br/><br/>
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
					<span><h3>Total</h3></span>
					<input type="number" readonly class="form-control" style="text-align: center; font-family: cursive;font-size: 30px" value="1500000">
				</center>
				<br/><br/>
				@include('table.table-movements')
			</div>
		</div>
	</div>
	@endif
@endsection