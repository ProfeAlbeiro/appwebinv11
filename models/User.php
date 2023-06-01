<?php
    class User{
        protected $rolCode;        
        protected $rolName;        
        protected $userCode;        
        protected $userName;        
        protected $userLastName;        
        protected $userEmail;        
        public function __construct(){}
        # Código Rol
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        public function getRolCode(){
            return $this->rolCode;
        }
    }
?>