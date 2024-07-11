<?php
    /* Inicializando la sesión del usuario */
    session_start();

/* Clase Conectar */
    class Conectar{
        protected $dbh;

        /* Funcion protegida de la Cadena de Conexion */
        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=diplomas","root","root");
                return $conectar;
            } catch (Exception $e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        /* Par impedir que se tenga problemas con caracteres espec */
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        /* Ruta princp del proyecto */
        public static function ruta(){
            return "http://localhost:3000/";
        }
    }

?>