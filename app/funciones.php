<?php
function showEcommerceHome(){
    echo('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <h1> Hola, este es el home </h1>
    <a href="home">Ir al Home</a>
    <a href="productos">Ir a ver productos</a>
    <a href="no-existe">Ir a ver no existe</a>
</body>
</html>');
}

function showAllProducts(){
    echo('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hola, acá irian todos los productos </h1>
    <a href="home">Ir al Home</a>
    <a href="productos">Ir a ver productos</a>
    <a href="no-existe">Ir a ver no existe</a>
</body>
</html>');
}