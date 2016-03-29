<?php
require 'variables.php';
?>

<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <link type="text/css" rel="stylesheet" href="style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>

        <?php
        require 'menu.php';
        ?>
        <br>

        <form action="resumen.php" method="post">.
            <table border="0">
                <tbody>
                    <tr>
                        <td>Codigo del Espacio: </td>
                        <td><input type="text" name="codigo" id="codigo" required="true"></td>
                    </tr>
                    <tr>
                        <td>Mt2 de avance: </td>
                        <td><input type="number" name="mt2" id="mt2"></td>
                    </tr>
                    <tr>
                        <td>Fecha del Avance: </td>
                        <td><input type="date" name="fechaAvance" id="fecha"></td>
                    </tr>
                    <tr>
                        <td>Nombre ingeniero a cargo: </td>
                        <td><input type="text" name="nombre" id="nombre"></td>
                    </tr>
                    <tr>
                        <td>E-Mail: </td>
                        <td><input type="email" name="correo" id="correo"></td>
                    </tr>
                    <tr>
                        <td>Piso del Edificio: </td>
                        <td><select name="piso" id="piso">
                                <option value="default">Selecciona</option>
                                <option value="0">subterraneo</option>
                                <option value="1">piso 1</option>
                                <option value="2">piso 2</option>
                                <option value="3">piso 3</option>
                                <option value="4">piso 4</option>
                                <option value="5">piso 5</option>
                                <option value="6">piso 6</option>
                                <option value="7">piso 7</option>
                                <option value="8">piso 8</option>
                                <option value="9">piso 9</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Comentarios: </td>
                        <td><input type="text" name="comment"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" value="Limpiar" ></td>
                        <td><input type="submit" value="Enviar" onclick="validar();"></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>

    <script type="text/javascript">
        $("input").focus(function () {
            $(this).css("backgroudn-color", "#cccccc")
        });
        $("input").blur(function () {
            $(this).css("backgroudn-color", "#ffffff")
        });
        function validar() {
            var cod = $("#codigo").val();
            if (cod == "") {
                alert("Defina valor de Codigo");
                return false;
            }
        }

        < /html>