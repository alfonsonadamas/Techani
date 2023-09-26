<?php
    
    require_once('php/classes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <title>Techani</title>
</head>

<body>
    <form action="">
        <?php
            
            if ($data ->num_rows > 0) {
                
        ?>
        <label for="registro">Fecha y hora de registro:</label>
        <select name="registro" id="">
            <?php
            while ($row = $data->fetch_assoc()) {
        ?>


            <option value="<?php echo $row["idRegistro_diario"] ?>"><?php echo $row["Fecha_Hora"] ?></option>
            <?php
            }

            }else{

            
        ?>

            <p>No hay ningun registro</p>

            <?php
            }
        ?>
        </select>

        <label for="tipo_comida">Tipo de comida</label>
        <select name="tipo_comida" id="">
            <option value="desayuno">Desayuno</option>
            <option value="c_mat">Colacion - Matutina</option>
            <option value="comida">Comida</option>
            <option value="c_vesp">Colacion - Vespertina</option>
            <option value="cena">Cena</option>
            <option value="al_correc">Alimento de Correccion</option>
        </select>

        <button>Siguiente</button>

        <table>
            <tr>
                <th>
                    Tipo de Alimento
                </th>
                <th>
                    Alimento
                </th>
                <th>
                    Porcion
                </th>
            </tr>

            <tr>
                <td>
                    <select name="" id="tipo_alimento">
                        <option value="" selected>--Selecciona una opcion--</option>
                        <option value="">Proteina</option>
                        <option value="">Grasa c/ Proteina</option>
                        <option value="">Lacteo</option>
                    </select>
                </td>
                <td>
                    <select name="" id="comida" disabled>
                        <option value="" selected>--Selecciona una opcion--</option>

                    </select>
                </td>
                <td>
                    <input type="number" id="porcion" disabled>
                </td>
            </tr>
        </table>




    </form>












</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</html>