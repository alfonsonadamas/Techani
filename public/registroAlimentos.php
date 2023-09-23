

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php/finalizarTransaccion.php">
        <label for="registro">Registro:</label>
        <select name="registro" id="">
            <?php
                include('php/iniciarTransaccion.php');
                while ($row = $data->fetch_assoc()) {
            ?>
                <option value="<?php echo $row["idRegistro_diario"] ?>"><?php echo $row["Fecha_Hora"] ?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit">  


    </form>

    
</body>
</html>