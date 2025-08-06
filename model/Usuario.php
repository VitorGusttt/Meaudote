<?php 
    require_once("../config/conn.php");
    class Usuario{
        private $id, $nome, $email, $senha, $tipo;
        public function __construct($nome, $email, $senha, $tipo){
            $this->id = $id; 
            $this->setNome($nome);
            $this->email = $email;
            $this->senha = $senha;
            $this->tipo = $tipo; 
        }
        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function criar(){
            global $mySql;

            try {
                $query = "INSERT INTO usuario (nome, email, senha, tipo) 
                 VALUES (:nome, :email, :senha, :tipo)";

                $queryPreparada = $mySql->prepare($query); // aqui pode falhar

                $queryPreparada->bindParam(':nome', $this->nome);
                $queryPreparada->bindParam(':email', $this->email);
                $queryPreparada->bindParam(':senha', $this->senha);
                $queryPreparada->bindParam(':tipo', $this->tipo);

                if ($queryPreparada->execute()) {
                    $this->id = $mySql->lastInsertId();
                    return true;
                } else {
                    return false;
                }

            }catch (PDOException $e) {
                echo "Erro na query: " . $e->getMessage();
            }
            
        }
    };
?>