<?php 
	

	if($_POST){
		require('core/core.php');	
		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'login':
					require('core/bin/ajax/goSesion.php');
				break;

			case 'registro':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goRegistro.php');
				break;

			case 'addAgente':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goRegistroAgente.php');
				break;

			case 'addZona':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goRegistroZona.php');
				break;

			case 'prestamo':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goPrestamo.php');
				break;

			case 'pago':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goPago.php');
				break;

			case 'modifica':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goModifica.php');
				break;

			case 'modificaAgente':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goModificaAgente.php');
				break;
			
			case 'modificaZona':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goModificaZona.php');
				break;

			case 'porcentaje':
					// header('location: ?view=sesion');
					require('core/bin/ajax/goModificaPorcentaje.php');
				break;
			
			default:
					header('location: ?view=admin');
				// include('core/controllers/sesionController.php');
				break;
		}
	}

	else{
			header('location: ?view=admin');
			// include('core/controllers/sesionController.php');
	}
?>