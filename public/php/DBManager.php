<?php
class DBManager{
    private $key;
    private function open()
    {
        $link = mysqli_connect("127.0.0.1", "root", null, "techani") or die('Error connecting to Data Base');
        return $link;
    }

    private function close($link)
    {
        mysqli_close($link);
    }

    public function generarToken(){
        $this->key = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $this->key;
        return $this->key;
    }

    public function login($usuario, $contrasena)
    {
        $link = $this->open();

        $sql1 = "SELECT Cve_paciente FROM paciente WHERE correo=? AND contraseña=?";

        $query = mysqli_prepare($link, $sql1) or die("Error at login");
        $query->bind_param("ss", $usuario, $contrasena);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows == 1) {
            $_SESSION['usuario'] = $usuario;
            $response = array("success" => true, "redirect_url" => "principal.php");
        } else {
            $response = array("success" => false, "message" => "Inicio de sesión fallido");
        }

        echo json_encode($response);

        $this->close($link);
    }


    public function addRegistro( $tipo_insulina, $dosis, $tipo_dosis, $tipo_medicion , $agua, $dia_atipico ,$observaciones, $glucosa){
        $link = $this->open();
        $sql = "INSERT INTO registro_diario (Fecha, Tipo_insulina, Dosis ,Tipo_dosis, Tipo_medicion,Cantidad_agua, Dia_atipico, Observaciones, glucosa ,Cve_paciente ) VALUES (NOW(), ?, ?, ?, ?, ?, ?, ?, ? ,1);";
        $query = mysqli_prepare($link, $sql) or die("Error at login");
        $query -> bind_param("ssssssss", $tipo_insulina, $dosis,$tipo_dosis, $tipo_medicion, $agua ,$dia_atipico, $observaciones, $glucosa);
        $query -> execute();
        header("location: ../registro.php");

        $this->close($link);
    }

    public function addRegistrAlimentoo($cadena) {
        $link = $this->open();
        $query = mysqli_prepare($link, $cadena) or die("Error");
        $query ->execute();

        $this->close($link);
    }


    public function verRegistrosDia()
    {
        $link = $this->open();

        $sql = "SELECT idRegistro_diario, DATE_FORMAT(Fecha_Hora, '%d %b %Y %h:%i') AS Fecha_Formateada  FROM registro_diario WHERE DATE(Fecha_Hora) = CURDATE();";

        $result = $link->query($sql);

        return $result;
    }

    public function verRegistrosDiarios()
    {
        $link = $this->open();
        
        $sql = "SELECT * , DATE_FORMAT(Fecha, '%d %b %Y') AS Fecha_Formateada  FROM registro_diario WHERE DATE(Fecha) = CURDATE();";

        $result = $link->query($sql);

        return $result;
    }

    public function buscarAlimentosProteina()
    {
        $link = $this->open();

        $sql = "SELECT * FROM `catalogo_alimentos` WHERE Tipo_alimento = 'Proteina';";

        $result = $link->query($sql);

        return $result;
    }

    public function buscarAlimentosGrasa()
    {
        $link = $this->open();

        $sql = "SELECT * FROM `catalogo_alimentos` WHERE Tipo_alimento = 'Grasa';";

        $result = $link->query($sql);

        return $result;
    }

    public function buscarAlimentosLacteo()
    {
        $link = $this->open();

        $sql = "SELECT * FROM `catalogo_alimentos` WHERE Tipo_alimento = 'Lacteo';";

        $result = $link->query($sql);

        return $result;
    }

    public function registrarCorreo($nombre, $apellidoP, $apellidoM, $usuario, $contraseña, $telefono, $correo){
        $link = $this->open();
        $sel = "SELECT correo FROM paciente WHERE correo = ? OR nombre_usuario = ?;";
        $query = mysqli_prepare($link, $sel) or die("Error at Sign Up");
        $query -> bind_param("ss", $correo, $usuario);
        $query -> execute();
        $result = $query->get_result();
        if ($result->num_rows >= 1) {
            $response = array("failed" => true, "message" => "El usuario o correo ya está registrado");
            
        } else {
            $sql = "INSERT INTO `paciente` (`nombre_paciente`, `apellidoP_paciente`, `apellidoM_paciente`, `nombre_usuario`, `contraseña`, `telefono`, `correo`) VALUES ( ?, ?, ?, ?, ?, ?, ?);";
            $query = mysqli_prepare($link, $sql) or die("Error al insertar el correo");
            $query->bind_param("sssssss", $nombre, $apellidoP, $apellidoM, $usuario, $contraseña, $telefono, $correo);
            $query -> execute();
            $result = $query->affected_rows;

            if ($result > 0) {
                $response = array("success" => true, "redirect_url" => "expediente.php");
                
            } else {
                $response = array("failedSignup" => false, "message" => "Algo salió mal");
            }

            
        }
        

        echo json_encode($response);

        $this->close($link);

    }

    public function eliminarRegistro($id){
        $link = $this->open();
        $sql = "DELETE FROM registro_diario WHERE idRegistro_diario = ?;";
        $query = mysqli_prepare($link, $sql) or die("Error al eliminar el registro");
        $query->bind_param("i", $id);
        $query -> execute();
        header("location: ../registro.php");

        $this->close($link);
    }

    public function addCitas($fechaCita, $horaCita, $tipoCita, $lugar, $observaciones) {
        $link = $this->open();
        $sql = "INSERT INTO citas (Fecha, Hora, Tipo_Cita, Lugar, Observaciones, Cve_paciente) VALUES (?, ?, ?, ?, ?, 1)";
        $query = mysqli_prepare($link, $sql) or die("Error al insertar la cita");
        $query->bind_param("sssss", $fechaCita, $horaCita, $tipoCita, $lugar, $observaciones);
        $query -> execute();
        
            
        header("location: ../citas.php");
        
        $this->close($link);
    }

    public function verCitas() {
        $link = $this->open();
        // Consulta preparada
        $sql = "SELECT * FROM citas";
        $stmt = $link->prepare($sql);
        // Ejecutar la consulta
        $stmt->execute();
        // Obtener el resultado
        $result = $stmt->get_result();
        // Cerrar la consulta preparada y la conexión
        $stmt->close();
        $this->close($link);
        return $result;
    }

    public function editarCitas($id, $fechaCita, $horaCita, $tipoCita, $lugar, $observaciones) {
        $link = $this->open();
        // Consulta preparada
        $sql = "UPDATE citas SET Fecha = ?, Hora = ?, Tipo_Cita = ?, Lugar = ?, Observaciones = ? WHERE idCitas = ?";
        $stmt = $link->prepare($sql);
        // Asociar parámetros
        $stmt->bind_param("sssssi", $fechaCita, $horaCita, $tipoCita, $lugar, $observaciones, $id);
        // Ejecutar la consulta
        $result = $stmt->execute();
        // Cerrar la consulta preparada y la conexión
        $stmt->close();
        $this->close($link);
        return $result;
    }

    public function elimiarCitas($id){
        $link = $this->open();
        
        $sql = "DELETE FROM citas WHERE id = $id";

        $result = $link ->query($sql);
        
        return $result;

    }
    public function addAnalisis($fecha, $tipo_estudio, $observaciones, $archivo, $clave)
    {
        $link = $this->open();
        $sql = "INSERT INTO análisis_archivos (Fecha, `Tipo de estudio`, `Archivo pdf`, Imagen, Observaciones, Cve_paciente) VALUES (?, ?, ?, NULL, ?, ?);";
        $query = mysqli_prepare($link, $sql) or die("Error at login");
        $query->bind_param("sssss", $fecha, $tipo_estudio, $archivo, $observaciones, $clave);
        $query->execute();
        header("location: ../analisis.php");

        $this->close($link);
    }

    public function verAnalisis($clave)
    {
        $link = $this->open();
        $sql = "SELECT análisis_archivos.`Archivo pdf`,análisis_archivos.idAnálisis_archivos FROM análisis_archivos WHERE Cve_paciente =?";
        $query = mysqli_prepare($link, $sql) or die("Error at login");
        $query->bind_param("s", $clave);
        $query->execute();
        $result = $query->get_result();
        return $result;
    }

    public function borrarAnalisis($id, $clave)
    {
        $link = $this->open();
        $sql = "DELETE FROM análisis_archivos WHERE idAnálisis_archivos=? AND Cve_paciente=?";
        $query = mysqli_prepare($link,$sql) or die ("Error at login");
        $query-> bind_param("ss",$id,$clave);
        $query-> execute();
        header("location: ../analisis.php");
        $this->close($link);

    }
    public function expedienteDp($nombre_paciente, $nombre_padre_tutor, $correo, $fecha_nacimiento, $lugar_nacimiento , $estado_nacimiento, $estado_residencia ,$sexo){
        $link = $this->open();
        $sql = "INSERT INTO expedientedp (Cve_paciente, nombrePaciente, menorEdad, correo, sexoBio, fechaNac, lugarNac, edoNac, edoRadicaAct) VALUES (1, ?, ?, ?, ?, ?, ?, ?, ?);";
        $query = mysqli_prepare($link, $sql) or die("Error at login");
        $query -> bind_param("ssssssss", $nombre_paciente, $nombre_padre_tutor, $correo, $sexo, $fecha_nacimiento , $lugar_nacimiento, $estado_nacimiento ,$estado_residencia);
        $query -> execute();
        header("location: ../registro.php");

        $this->close($link);  
    }


}

?>