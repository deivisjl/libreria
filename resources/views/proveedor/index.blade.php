@extends('app')

@section('content')
<div class="container">
	<div class="row text-center">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">PROVEEDORES</div>

				<div class="panel-body">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<a href="/app/proveedor/agregar" class="btn btn-primary" style="float: center;">Agregar Proveedor</a><br/><br/>
							</div>

						</div>
							<table id="proveedor" class="table table-striped">
					            <thead>
					                <tr>
						                  <th style="text-align: center;">Nombre del Proveedor</th>
						                  <th style="text-align: center;">Telefono del Proveedor</th>
						                  <th style="text-align: center;">Nombre del Contacto</th>
						                  <th style="text-align: center;">Correo del Contacto</th>
						                  <th></th>
					                </tr>
					            </thead>
				            </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$(document).on("ready",function(){
			listar();
		});

		var listar = function(){
		var table = $("#proveedor").DataTable({
				"processing": true,
	          	"serverSide": true,
	          	"destroy":true,
	          	"ajax":{
	            'url': './app/proveedor/listar',
	            'type': 'GET'
	          },
	          "columns":[
	          	  {'data': 'Codigo'},
	              {'data': 'Proveedor'},
	              {'data': 'Telefono'},
	              {'data': 'Contacto'},
	              {'data': 'Correo'},
	              {'defaultContent':'<button class="editar  btn btn-info">Editar</button>'}
	          ],
	          "language": idioma_spanish	
			});
			//obtener_data_editar("#deudor tbody",table);
		}

		var idioma_spanish = {
		    "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		}
	</script>
@endsection