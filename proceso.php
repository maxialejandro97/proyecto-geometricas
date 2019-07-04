<?php /* Created on: 27/06/2019 */ ?>
<html>
<head>




<link rel="StyleSheet" type="text/css" href="css/estilo1.css">
</head>
<body>
<?php 	
   		
	 if (isset($_POST["lamparita"])) $lamparita= $_POST["lamparita"];
	else $lamparita=0; 
 	
	if (isset($_POST["heladera"])) $heladera= $_POST["heladera"];
	else $heladera=0; 
	
	if (isset($_POST["aire"])) $aire= $_POST["aire"];
	else $aire=0;
	
	if (isset($_POST["tv"])) $tv= $_POST["tv"];
	else $tv=0;
	 
	
	
	 

 	$horalamp = $_POST['horalamp'];
	$horahela = $_POST['horahela'];	
	$horaaire = $_POST['horaaire'];
	$horatv = $_POST['horatv'];
	
	   	
	
	if($lamparita== 1)
	{
	 		
	 $conslam = $horalamp * 30;	
	 
	  echo"<b><h3>CONSUMO DE LAMPARITA POR HORA ES DE:</3></b>".'30';
	  echo '<img src="descarga.jpg" border="0" width="225" height="225" alt=""><br>';
	  echo"<b><b>EL CONSUMO TOTAL ES DE:</b></b>".$horalamp * 30; 	
	}
	
	if($heladera== 2)
	{ 		
		
	$conshela = $horahela * 400 ;
	
	  echo"<b><h3>CONSUMO DE HELADERA POR HORA ES DE:</3></b>".'400';
	  echo '<img src="descarga (1).jpg" border="0" width="225" height="225" alt=""><br>';
	  echo"<b><b>EL CONSUMO TOTAL ES DE:</b></b> ".$horahela * 400;	
	}
	
	if($aire== 3)
	{ 		
			   
	  $consaire = $horaaire * 935 ;
	  
	  echo"<b><h3>CONSUMO DE AIRE POR HORA ES DE:</3></b>".'935';
	  echo '<img src="descarga (2).jpg" border="0" width="225" height="225" alt=""><br>';
	  echo"<b><b>EL CONSUMO TOTAL ES DE:</b></b>".$horaaire * 935;	
	}
	
	if($tv== 4)
	{ 		
			   
	
	$constv = $horatv * 90 ;
	
	  echo"<b><h3>CONSUMO DE TV POR HORA ES DE:</3></b>".'90';
	  echo '<img src="descarga (3).jpg" border="0" width="256" height="197" alt=""><br>';
	  echo"<b><b>EL CONSUMO TOTAL ES DE:</b></b>".$horatv * 90;
	}  
	
?>	 
</body>
</html>
