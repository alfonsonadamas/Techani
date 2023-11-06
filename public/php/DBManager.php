<?php
 class DBManager{
    private $key;
    private function open(){
        $link = mysqli_connect("127.0.0.1", "root", null, "techani") or die('Error connecting to Data Base');
        return $link;
    }

    private function close($link){
        mysqli_close($link);
    }

    public function login($usuario, $contrasena){
        $link = $this->open();

        $sql1 = "SELECT Cve_paciente FROM paciente WHERE correo=? AND contraseña=?";
        
        $query = mysqli_prepare($link, $sql1) or die("Error at login");
        $query -> bind_param("ss", $usuario, $contrasena);
        $query -> execute();
        $result = $query->get_result();

        if ($result->num_rows == 1) {
            $response = array("success" => true, "redirect_url" => "principal.php");
            
        } else {
            $response = array("success" => false, "message" => "Inicio de sesión fallido");
        }

        echo json_encode($response);

        $this->close($link);

    }


    public function addRegistro( $tipo_insulina, $dosis, $tipo_dosis, $tipo_medicion , $agua, $dia_atipico ,$observaciones){
        $link = $this->open();
        $sql = "INSERT INTO registro_diario (Fecha_Hora, Tipo_insulina, Dosis ,Tipo_dosis, Tipo_medicion,Cantidad_agua, Dia_atipico, Observaciones, Cve_paciente ) VALUES (NOW(), ?, ?, ?,?, ?, ?, ?, 1);";
        $query = mysqli_prepare($link, $sql) or die("Error at login");
        $query -> bind_param("sssssss", $tipo_insulina, $dosis,$tipo_dosis, $tipo_medicion, $agua ,$dia_atipico, $observaciones );
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
    

    public function addRegistrAlimentoo($cadena) {
        $link = $this->open();
       $query = mysqli_prepare($link, $cadena) or die("Error");
       $query ->execute();

        $this->close($link);

    }

    public function verRegistrosDia(){
        $link = $this->open();
        
        $sql = "SELECT idRegistro_diario, DATE_FORMAT(Fecha_Hora, '%d %b %Y %h:%i') AS Fecha_Formateada  FROM registro_diario WHERE DATE(Fecha_Hora) = CURDATE();";

        $result = $link ->query($sql);
        
        return $result;

    }

    public function verRegistrosDiarios(){
        $link = $this->open();
        
        $sql = "SELECT idRegistro_diario, DATE_FORMAT(Fecha_Hora, '%d %b %Y %h:%i') AS Fecha_Formateada  FROM registro_diario WHERE DATE(Fecha_Hora) = CURDATE();";

        $result = $link ->query($sql);

        return $result;
    }

    public function buscarAlimentosProteina(){
        $link = $this->open();
        
        $sql = "SELECT * FROM `catalogo_alimentos` WHERE Tipo_alimento = 'Proteina';";

        $result = $link ->query($sql);

        return $result;
    }

    public function buscarAlimentosGrasa(){
        $link = $this->open();
        
        $sql = "SELECT * FROM `catalogo_alimentos` WHERE Tipo_alimento = 'Grasa';";

        $result = $link ->query($sql);

        return $result;
    }

    public function buscarAlimentosLacteo(){
        $link = $this->open();
        
        $sql = "SELECT * FROM `catalogo_alimentos` WHERE Tipo_alimento = 'Lacteo';";

        $result = $link ->query($sql);

        return $result;
    }

    
   


    
 }

?>