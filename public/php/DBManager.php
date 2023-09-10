<?php
 class DBManager{
    private function open(){
        $link = mysqli_connect("127.0.0.1", "root", null, "techani") or die('Error connecting to Data Base');
        return $link;
    }

    
 }

?>