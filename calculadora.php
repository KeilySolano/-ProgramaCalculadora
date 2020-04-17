<html>
<head>
    <link rel="stylesheet" type="text/css" href="diseño.css" />
<title>Resultado</title>
</head>

<body align="center" bgcolor="#a95092">
<div >
<header>
<font color="#ffffff"><h1>RESPUESTA</h1></font>
</header>
</div>


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