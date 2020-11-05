<!DOCTYPE html>
    
<meta charset="utf-8">
<title>Webtasks</title>
<link rel="stylesheet" href="styles.css">

<h1></h1>  <!----Por si quieres poner un titulo-->

<form action="/index.php">
    <input name="afegir">
    <select name="prioritat" size="1">
        <option value="Alta">Alta</option>
        <option value="Baixa">Baixa</option>
    </select>
    <input class="bguay" type="submit" value="Afegir">    
</form>

<p></p><!---espacio-->

<?php


$db = new mysqli("localhost", "admin",  "admin", "BASEDEDATOS");



if (!empty($_GET['afegir'])) {
    $stmt = $db->prepare("INSERT INTO TAULA1 VALUES(?,?)");
    $stmt->bind_param("ss", $_GET['afegir'], $_GET['prioritat']);
    $stmt->execute();
}

if (!empty($_GET['eliminar'])) {
    $stmt = $db->prepare("DELETE FROM TAULA1 WHERE descripcio = ?");
    $stmt->bind_param("s", $_GET['eliminar']);
    $stmt->execute();
}

foreach ($db->query("SELECT * FROM TAULA1 WHERE prioritat='Alta'") as $fila) {
        echo "<li class='${fila['prioritat']}'>";
        echo "${fila['descripcio']}";
        echo "<a href='?eliminar=${fila['descripcio']}'><img src='basura.jpg' alt='delete' style='widows: 22px;height:22px'></a>
    </li>";
}

foreach ($db->query("SELECT * FROM TAULA1 WHERE prioritat='Baixa'") as $fila) {
        echo "<li class='${fila['prioritat']}'>";
        echo "${fila['descripcio']}";
        echo "<a href='?eliminar=${fila['descripcio']}'><img src='basura.jpg' alt='delete' style='widows: 22px;height:22px'></a>
    </li>";
}
?>