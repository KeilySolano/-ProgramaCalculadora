<html>
<head>
<link rel="stylesheet" type="text/css" href="diseño.css" />
<title>Resultado</title>
</head>

<body>

<header>
<h1>RESPUESTA</h1>
</header>

<section>
<?php 

$valoruno=$_POST['1er'];
$valordos=$_POST['2do'];

$opcion=$_POST['operaciones'];


if($opcion == 'suma')
{
 $Resultado=($valoruno+$valordos);
}

else if($opcion == 'resta')
{
 $Resultado=($valoruno-$valordos);
}

else if($opcion == 'mult')
{
 $Resultado=($valoruno*$valordos);
}

else if($opcion == 'divs')
{
 $Resultado=($valoruno/$valordos);
}

?>

<p>
<?php echo $Resultado; ?>
</p>
 
</section>
</body>
</html>