<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
	$f_ini = $_POST['f_ini'];
	$f_fin = $_POST['f_fin'];
	$suma = 0;
	$sql = $db->query("SELECT * FROM totfac WHERE FEC_FAC BETWEEN '$f_ini' AND '$f_fin'");

	if($db->rows($sql) > 0)
	{
		$html = "<table class='tablav'><thead>
					    <tr>
					      <th>Factura</th>
					      <th>Fecha</th>
					      <th>Importe</th>
					      <th>Cliente</th>
					    </tr></thead><tbody>";
				while($row = $db->runs($sql))
				{
				  
				  $id_cli = $row['NUM_CLI'];
				  $sql2 = $db->query("SELECT * FROM catacli WHERE NUM_CLI='$id_cli'");
				  $row2 = $db->runs($sql2);

				  $html .= "<tr>
				  <td>" . $row['NUM_FAC'] . "</td>
                  <td>" . $row['FEC_FAC'] . "</td>
                  <td>" . $row['TOT_PAG'] . "</td>
                  <td>" . $row2['NOM_CLI'] . "</td></tr>";
                  
				  $suma = $suma + $row['TOT_PAG'];
				} 
				

				$html .= " <tr><td></td>
							   <td><b>TOTAL</b></td>
							   <td>".$suma."</td>
							   <td></td></tr>
				</tbody></table>";

		$re = array(
     	"id" => '1',
     	"resultado" => $html
   		 );	
	}
	else
	{	
		$html = '<div class="alert alert-dismissible alert-success">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Atención</strong> sin resultados de busqueda.
	              </div>';

		$re = array(
     	"id" => '2',
     	"resultado" => $html
   		 );	
	}
	

		$db->liberar($sql);
		$db->close();    
		echo json_encode($re);
		
	}
	
?>
