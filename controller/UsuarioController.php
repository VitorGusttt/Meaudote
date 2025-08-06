<?php
    require_once('../model/Usuario.php');
    class UsuarioController{
        public function criar(){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $tipo = $_POST['tipo'];

            $usuario = new Usuario($nome, $email, $senha, $tipo);
            $usuario->criar();
        }
    }
?>