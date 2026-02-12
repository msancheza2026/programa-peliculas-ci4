<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>

    <h1>Listado peliculas </h1>

        <p> <?php echo $nombreVariableVista ?></p>   
        <p> <?php echo $nombreVariableVista2 ?></p>   
        <p> <?= $nombreVariableVista3 ?></p>
        
        <ul>
            <?php foreach ($miArray as $key => $value) : ?>
                <li><?= $value ?></li>
            <?php endforeach ?>
        </ul>

</body>
</html>