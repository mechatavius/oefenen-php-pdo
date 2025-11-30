<?php
session_start();
require "Functies.php";

{
    $karakter = new Functies($pdo);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
        $karakter->Insert($naam,$element,$regio,$ras);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="Functies.php" method="POST">

<label for="naam">Naam:</label>    
<input type="text" name="naam">

<lable for="element">Element:</lable>
<select>
    <option value="Pyro">Pyro</option>
    <option value="Cryo">Cryo</option>
    <option value="Anemo">Anemo</option>
</select>

<label for="region">Region:</label>
<select>
    <option value="Mondstad">Mondstad</option>
    <option value="Liyue">Liyue</option>
    <option value="Inazuma">Inazuma</option>
    <option value="Sumeru">Sumeru</option>
    <option value="Fontaine">Fontaine</option>
    <option value="Natlan">Natlan</option>
    <option value="Nodkrai">Nodkrai</option>
</select>

<label for="ras">Ras:</label>
<select>
    <option value="Mens">Mens</option>
    <option value="geen-mens">geen-mens</option>
</select>

<button type="submit">karakter toevoegen</button>

</form>

</body>
</html>