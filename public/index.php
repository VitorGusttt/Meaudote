<?php
    $rotaUrl = $_GET['url'] ?? 'home/index'; //pegue a rota se tiver, caso n tenha ela vale home/index
    $partesUrl = explode('/', $rotaUrl); //a cada / ele quebra a string e joga no array
    $controlador = ucfirst($partesUrl[0]) . "Controller"; //tranforma a primeira letra em maiuscula e concateca com Controller 
    $metodo = $partesUrl[1] ?? "index.php"; //se tiver metodo ele pega e se n tiver ele jogo o index
    $caminho = "../controller/$controlador.php";//gera o caminho dos arquivos

    if (file_exists($caminho)){
        require_once($caminho);
        $objeto = new $controlador(); //instancia o controlador
        
        if (method_exists($objeto, $metodo)){
            $objeto->$metodo(); //faz o metodo do objeto
        }else{
            echo "metodo inexistente";
        };
    }else{
        echo "controlador n existe";
    };

?>