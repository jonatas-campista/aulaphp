<?php
    class Usuario{
        public $idUsuario;
        public $nomeUsuario;
        public $loginUsuario;
        public $senha;

        //métodos set e get
        //é com vcs

        function setIdUsuario($idUsuario) {
            $this->idUsuario = $idUsuario;
        }
    
        function setNomeUsuario($nomeUsuario) {
            $this->nomeUsuario = $nomeUsuario;
        }
    
        function setLoginUsuario($loginUsuario) {
            $this->loginUsuario = $loginUsuario;
        }
    
        function setSenha($senha) {
            $this->senha = $senha;
        }
        function getIdUsuario() {
            return $this->idUsuario;
        }
    
        function getNomeUsuario() {
            return $this->nomeUsuario;
        }
    
        function getLoginUsuario() {
            return $this->loginUsuario;
        }
    
        function getSenha() {
            return $this->senha;
        }
    }

?>