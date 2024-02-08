<!-- que es una variable? 
es el espacio en memoria que utilizamos en nuetra aplicacion -->

<!-- ejemplo -->
<?
$nombre = "Aldo puello";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- clase #1
    se debe definir de la siguiente forma si queremos añadir codigo php dentro del html, se debe abrir (< ?php) 
    y se debe cerrar (?>) de lo contrario seria incorrecto. -->
    <h1> <?php echo "mi nombre es" . $nombre;?></h1>
    
    <!-- existe otra forma, si estamos utilizando comillas dobles se puede hacer de la siguiente forma  -->
    <!-- <h1> <?php echo "mi nombre es $nombre";?></h1> -->

    <!-- otra forma seria -->
    <!-- <h1> <?php echo 'mi nombre es ' . $nombre;?></h1> -->
</body>
</html>