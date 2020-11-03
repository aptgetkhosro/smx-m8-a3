<!DOCTYPE html>
    
<meta charset="utf-8">
<title>Webtasks</title>
<link rel="stylesheet" href="styles.css">

<h1></h1>  <!----Por si quieres poner un titulo-->

<form action="/index.php">
    <input id="Afegir" name="Afegir">
    <select id="khosrov" name="khosrov" size="1">
        <option value="Alta">Alta</option>
        <option value="Baixa">Baixa</option>
    </select>
    <input type="submit" value="Afegir">    
</form>

<p></p><!---espacio-->

<ul>
    <li class="baixa">
    Comprar el PA
    <a href="?eliminar=Comprar el pa"><img src="basura.jpg" alt="delete" style="widows: 22px;height:22px"></a>        
    </li>

    <li class="alta">
    Aprendre HTML
    <a href="?eliminar=Aprendre HTML"><img src="basura.jpg" alt="delete" style="widows: 22px;height:22px"></a>
    </li>
    
    <li class="alta">
    Fer exercici
    <a href="?eliminar=Fer exercicis"><img src="basura.jpg" alt="delete" style="widows: 22px;height:22px"></a>
    </li>

    <li class="baixa">
    Aprendre CSS
    <a href="?eliminar=Aprendre CSS"><img src="basura.jpg" alt="delete" style="widows: 22px;height:22px"></a>
    </li>

    <li class="alta">
    Aprovar SMX
    <a href="?eliminar=Aprovar SMX"><img src="basura.jpg" alt="delete" style="widows: 22px;height:22px"></a>
    </li>
</ul>

<?php


$db = new mysqli("localhost", "root", "1234", "BASEDEDATOS");

$stmt = $db->prepare("INSERT INTO TAULA1 VALUES(descripcio,prioritat)");
$stmt->bind_param("ss", ALTA, BAIXA);
$stmt->execute();

$stmt = $db->prepare("INSERT INTO TAULA1 VALUES(descripcio,prioritat)");
$stmt->bind_param("ss", $_GET['TEXT'], $_GET['Afegir']);
$stmt->execute();

$usuario = "root";
$contrasena = "1234";  
$servidor = "localhost";
$basededatos = "BASEDEDATOS";

$conexion = mysqli_connect( $localhost, $root, "1234" );

$db = mysqli_select_db( $conexion, $BASEDEDATOS );
?>

