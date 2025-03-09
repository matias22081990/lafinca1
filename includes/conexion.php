<?php
    $enlace=mysqli_connect("localhost","root","","inmobiliaria");
?>
<?php
    class mysqlconex{
        public function conex(){
            $enlace=mysqli_connect("localhost","root","","inmobiliaria");
            return $enlace;
        }
    }
?>