<html>
<head>
	<title></title>
</head>
<body>

<?php 

$v = array();
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';
var_dump($v);
echo "<br>";
foreach ($v as $aux) 
{
	
	echo $aux;
	echo "<br>";
}

 ?>

</body>
</html>