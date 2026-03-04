<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>

    <h1>Listado Peliculas </h1>

               
        <div>
            <?php foreach ($peliculas as $key => $p) : ?>
                <h3><?= $p['titulo'] ?></h3>
                <p><?= $p['descripcion'] ?></p>
            <?php endforeach ?>
        </div>

</body>
</html>
