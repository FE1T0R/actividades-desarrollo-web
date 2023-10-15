<?php

$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "http://localhost:3000/contact");
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$responserest = curl_exec($ct);
curl_close($ct);
$datos = json_decode($responserest);
?>
<!DOCTYPE html>  
 <html>
<head>         
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>Read a JSON File</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
body{
background: #D6EAF8;
}
#tbstyle {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#tbstyle td, #tbstyle th {
  border: 1px solid #ddd;
  padding: 8px;
}
#tbstyle tr:nth-child(even){background-color: #f2f2f2;}
#tbstyle tr:hover {background-color: #ddd;}
#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #859161;
  color: White;
}
</style>
      </head>
	  <body>  
	   <div class="container" style="width:500px;">  
	   <div class="table-container">
	   <?php  
			if(isset($datos))  
			 {  
			 ?>

		<h1>Visualización de los datos del Ejercicio 1</h1>

		<table id="tbstyle">
			<tbody>
				<tr>
					<th>Id</th>
					<th>Nombre Asesor</th>
					<th>Correo Asesor</th>
					<th>Mesaje del CLiente</th>
					<th>Hora y Fecha</th>
				</tr>
				<?php foreach ($datos as $dato) { ?>
				<tr>
					<td> <?= $dato->id; ?> </td>
					<td> <?= $dato->name; ?> </td>
					<td> <?= $dato->email; ?> </td>
					<td> <?= $dato->message; ?> </td>
					<td> <?= $dato->date; ?> </td>

					
					
				</tr>
				<?php } 
			 }
			 ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>




