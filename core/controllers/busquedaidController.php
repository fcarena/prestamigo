<?php  
	$db = new Conexion();
	$id = $_POST['val'];
	$consulta = $db->query("SELECT PAG.NUM_CLI,PAG.TIP_PAG, PAG.NUM_PAG, PAG.IMP_PAG, PAG.FEC_PAG, CLI.NOM_CLI FROM movpag as PAG, catacli as CLI WHERE PAG.NUM_CLI = '$id' AND CLI.NUM_CLI = '$id'  LIMIT 1;");

	$row = $db->runs($consulta);

		if ($row['NUM_PAG'] < 10)
		{
			$new = $row['NUM_PAG'] ;
			$clientes= '0000'.$new;	
		}

		if ($row['NUM_PAG'] >= 10)
		{
			$new = $row['NUM_PAG'];
			$clientes= '000'.$new;	
		}
		

		if ($row['NUM_PAG'] >= 100)
		{
			$new = $row['NUM_PAG'] ;
			$clientes= '00'.$new;	
		}

		if ($row['NUM_PAG'] >= 1000)
		{
			$new = $row['NUM_PAG'] ;
			$clientes= '0'.$new;	
		}

		if ($row['NUM_PAG'] >= 10000)
		{
			$new = $row['NUM_PAG'] ;
			$clientes= $new;	
		}


		if ($row['NUM_CLI'] < 10)
		{
			$cli = $row['NUM_CLI'];
			$num_cli= '0000'.$cli;	
		}

		if ($row['NUM_CLI'] >= 10)
		{
			$cli = $row['NUM_CLI'];
			$num_cli= '000'.$cli;	
		}
		

		if ($row['NUM_CLI'] >= 100)
		{
			$cli = $row['NUM_CLI'];
			$num_cli= '00'.$cli;	
		}

		if ($row['NUM_CLI'] >= 1000)
		{
			$cli = $row['NUM_CLI'];
			$num_cli= '0'.$cli;	
		}

		if ($row['NUM_CLI'] >= 10000)
		{
			$cli = $row['NUM_CLI'];
			$num_cli= $cli;	
		}


	     $re = array(
		  	"nom"  =>  $row['NOM_CLI'],
		  	"num"  =>  $num_cli,
		  	"pag"  =>  $clientes,
		  	"pres"  =>  $row['IMP_PAG'],
		  	"tipo"  =>  $row['TIP_PAG'],
		  	"fec"  =>  $row['FEC_PAG']

        );	
	

		
		echo json_encode($re);
		$db->liberar($consulta);
		$db->close();
		
?>