<?php
 class DBManager{
    private function open(){
        $link = mysqli_connect("127.0.0.1", "root", null, "techani") or die('Error connecting to Data Base');
        return $link;
    }

    private function close($link){
        mysqli_close($link);
    }


    public function addRegistro( $tipo_insulina, $dosis, $tipo_dosis, $tipo_medicion , $agua, $dia_atipico ,$observaciones){
        $link = $this->open();
        $sql = "INSERT INTO registro_diario (Fecha_Hora, Tipo_insulina, Dosis ,Tipo_dosis, Tipo_medicion,Cantidad_agua, Dia_atipico, Observaciones, Cve_paciente ) VALUES (NOW(), ?, ?, ?,?, ?, ?, ?, 1);";
        $query = mysqli_prepare($link, $sql) or die("Error at login");
        $query -> bind_param("sssssss", $tipo_insulina, $dosis,$tipo_dosis, $tipo_medicion, $agua ,$dia_atipico, $observaciones );
        $query -> execute();

        $this->close($link);
        
        
    }

    public function anadirComida(){
        $link = $this->open();
        
        
        $this->close($link);

    }

    public function verRegistrosDiarios(){
        $link = $this->open();
        
        $sql = "SELECT * FROM registro_diario ";

        $result = $link ->query($sql);

        return $result;
    }

   


    
 }

?>