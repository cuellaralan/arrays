<html>
<head>
	<title></title>
</head>
<body>

<?php 
$lapicera1 = array("color" => "rojo", "marca"=>"acme", "trazo"=>"fino","precio"=>30000);
$lapicera2 = array("color" => "azul", "marca"=>"parapa", "trazo"=>"grueso","precio"=>22);
$lapicera3 = array("color" => "verde", "marca"=>"ring", "trazo"=>"xxl","precio"=>878);

$lapiceras = array();

array_push($lapiceras, $lapicera1);
array_push($lapiceras, $lapicera2);
array_push($lapiceras, $lapicera3);

var_dump($lapiceras);

foreach ($lapiceras as $lapicera ) 
{
	echo "<br>";
	foreach ($lapicera as $aux => $value) 
	{
		echo "<br>";
		echo $aux."=>";
		echo $value;
	}
}



 ?>

</body>
</html>