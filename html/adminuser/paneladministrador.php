
<?php 
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
		// header('location: ?view=sesion');
	}

	else
	{
		include (HTML_DIR.'dise-secu/header.php'); 
?>

<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?>
	<section>
		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?>
		</article>
		<article id="dere" class="derechasection">
			algo
		</article>
	</section>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>	
</html>
<?php  } ?>	

