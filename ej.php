<?php
session_start();

//manejar arreglos en session
if (isset($_SESSION["platos"])) {
    $_SESSION["platos"][] = $_POST["plato"];
} else {
    $_SESSION["platos"] = array();
    $_SESSION["platos"][] = $_POST["plato"];
}
count($arreglo) //para el tamaño
?>

//tabla en html
<table>
    <tr>
        <td>Nombre</td>
        <td>Precio</td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td>Precio</td>
    </tr>
</table>

<a href="archivo.php" target="_blank"></a>

//select, y input checkbox
<form method="POST">
    <select name="op">
        <option value="valor que tomara op">Opcion 1</option>
        <option value="al elegir alguna opcion">Opcion 2</option>
    </select>
    <input name="input1" value="valor que tomara input" type="checkbox">Marcar como hecho</input>
    <input name="input2" value="si se marca la casilla" type="checkbox">Marcar como hecho</input>
</form>

<?php
    if(isset($_POST["input1"])){ //comprueba si existe la variable
        echo "se marco input 1 de valor $_POST["input1"];
    };
?>
