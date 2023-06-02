<?php
    class Users{
        public function __construct(){}
        public function main(){
            header("Location:?c=Dashboard");
        }
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                echo "Estoy en el controlador CreateRol";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "Procesando la creación del Rol";
            }
        }
    }
?>