<?php
    class Db_conexion {

        function __construct() {
            $this->conectar();
        }

        function __destruct() {
            $this->db_cerrar(); 
        }

        public function conectar() {
            // importante los parametros de la conexion.
            require_once 'parametros.php';

            // conexión con el drivers MYSQLI
            $conexion = mysqli_connect(db_servidor,db_usuario,db_contrasena,db_base_datos) 
            or die ('Sin conexión a la base de datos');

            // retornar la conexion de la base de datos.
            return $conexion;
        }

        public function db_cerrar(){
            // corrar la conexion de la base de datos.
            mysqli_close($this->conectar());
        }

    }
?>