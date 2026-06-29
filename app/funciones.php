<?php
function showEcommerceHome(){
    echo('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/index.css">
    </head>
    <body>
            <header>
            <nav>
                <a href="home">Home</a>
                <a href="productos">Productos</a>
                <a href="no-existe">No existe</a>
            </nav>
        </header>
    <h1> Hola, este es el home </h1>
</body>
</html>');
}

function showAllProducts()
{
    $products = json_decode(file_get_contents('database/productos.json'), true);
    echo('
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Productos</title>

        <link rel="stylesheet" href="assets/style/index.css">
    </head>
    <body>

        <header>
            <nav>
                <a href="home">Home</a>
                <a href="productos">Productos</a>
                <a href="no-existe">No existe</a>
            </nav>
        </header>

        <main>
            <h1>Listado de productos</h1>

            <ul>
    ');

    foreach ($products as $product) {
        echo("
            <li>
                {$product['nombre']}
                <img src='assets/product_images/{$product['imagen']}' alt='Imagen de producto' width='100px'>
            </li>
        ");
    }

    echo('
            </ul>
        </main>

    </body>
    </html>
    ');
}