@extends('app')

@section('content')
    @if(Auth::check() == false)
	<div id="index" class="row my-5">
		<div class="col-sm-12 my-5">
			<div class="row">
				<div class="col-sm-6" id="img-index">

					<h3 style="margin-top: 22rem!important" id="title-index">Monedero es una app, la cual te permite realizar funciónes como: </h3>
					<ul class="list-group">
						<li class="list-group-item text-white" id="cont-index"><h5>Llevar el control de tus gastos.</h5></li>
						<li class="list-group-item text-white" id="cont-index"><h5>Acceder desde cualquier parte.</h5></li>
						<li class="list-group-item text-white" id="cont-index"><h5>Controlar tus ingresos y egresos de una manera segura.</h5></li>
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
			<div class="container" id="movements_crud">
				<br/><br/>
				@include('modal.modal-settings-user')
				@include('form.form-addcash')
				<center>
					<br/>
					<span><h3 id="title">Dinero en Cartera</h3></span>
					<button onclick="obtener()" class="btn btn-secondary">¿Cuanto Tengo?</button>
				</center>
				<br><br>
				<div class="table-responsive-sm">
					@include('table.table-movements')
				</div>
			</div>
		</div>
	</div>
	@endif
@endsection

<style type="text/css">
</style>

<script>
	function obtener(){		
		var table = document.getElementById("movements").getElementsByTagName('tr')[1];
		var product=table.getElementsByTagName("td")[6].innerHTML;
		alert("Actualmente el dinero que poseo es: "+product)
		return false;
	}

	function filter(){
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	}
</script>