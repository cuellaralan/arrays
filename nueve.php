<html>
<head>
	<title></title>
</head>
<body>

<?php 

$lapicera1 = array("color" => "rojo", "marca"=>"acme", "trazo"=>"fino","precio"=>30000);
echo "lapicera1";

foreach ($lapicera1 as $aux ) 
{
	echo "<br>";
	echo $aux;
}

echo "<br>";echo "<br>";
echo "lapicera2";

$lapicera2 = array("color" => "azul", "marca"=>"parapa", "trazo"=>"grueso","precio"=>22);

foreach ($lapicera2 as $aux ) 
{
	echo "<br>";
	echo $aux;
}

echo "<br>";echo "<br>";
echo "lapicera3";

$lapicera3 = array("color" => "verde", "marca"=>"ring", "trazo"=>"xxl","precio"=>878);

foreach ($lapicera3 as $aux ) 
{
	echo "<br>";
	echo $aux;
}


 ?>

</body>
</html>