<?php include(HTML_DIR.'dise-secu/header.php'); ?>
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?>
		</article>


		<article id="dere" class="derechasection">
			<p class="titulosec"> Reportes&nbsp;>>&nbsp;Clientes</p>
			<p class="aqui">Aquí puede realizar los siguientes reportes:</p>
			<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Edo. de cuenta</p>
						</article>
					</article>
					<a href="?view=insert"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Cartera</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-users fa-5x"></i>
							<p class="rcliente">Resumen/Cliente</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-globe fa-5x" aria-hidden="true"></i>
							<p class="rcliente">Cartera/Zona</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				</article>


			</article>
		</article>

	</section>
	<script src="view/app/boostrap/js/jquery.js"></script>
	<script src="view/app/boostrap/js/boostrap.min.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>
</html>