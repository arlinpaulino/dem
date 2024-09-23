<?php

    class DBLibreria {

        private $server = "localhost";
        private $user = "root";
        private $pwd = "";
        private $database = "libreriadb";

        private function getCnxn() {
            $cnxn = new PDO("mysql:host=$this->server;dbname=$this->database", $this->user, $this->pwd);
            return $cnxn;
        }

        public function getTitulos() {
            $pdoCnxn = $this->getCnxn();
            $res = array();
        
            if (is_object($pdoCnxn)) {
                $sql = "SELECT * FROM `titulos` ORDER BY `titulo`";
                $stmt = $pdoCnxn->query($sql);
        
                if ($stmt) {
                    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                }
            } else {
            }
        
            return $res;
        }
        
        public function getAutores() {
            $pdoCnxn = $this->getCnxn();
            $res = ["empty"];

            if ( is_object($pdoCnxn)) {
                $sql = "SELECT * FROM `autores`";
                $res = $pdoCnxn->query($sql);
            }

            return $res;
        }

        public function getMensaje() {
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $pdoCnxn = $this->getCnxn();
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $asunto = $_POST['asunto'];
                $mensaje = $_POST['message'];

                try {
                    $sql = "INSERT INTO `contacto` (nombre, correo, asunto, mensaje) VALUES (:nombre,:correo,:asunto,:message)";
                    $statement = $pdoCnxn->prepare($sql);
                    $statement->bindParam(':nombre', $nombre);
                    $statement->bindParam(':correo', $correo);
                    $statement->bindParam(':asunto', $asunto);
                    $statement->bindParam(':message', $mensaje);
    
                    $statement->execute();
                } catch(PDOException $e) {
                     echo "Error al enviar el mensaje. Por favor contáctenos directamente a contacto@bibliotecadeohara.org";
                }
            } 
                                
        }
    }
    
?>