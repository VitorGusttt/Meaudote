<?php
class HomeController{
    public function index(){
        include("../view/home.php");
    }

    public function cadastroForm() {
        include("../view/formCadastro.php");
    }

    public function cadastroAnimaisForm() {
        include("../view/formCadastroAnimais.php");
    }

    public function loginForm() {
        include("../view/formLogin.php");
    }
    public function perfilAnimais(){
        include("../view/perfilAnimal.php");
    }
}
?>