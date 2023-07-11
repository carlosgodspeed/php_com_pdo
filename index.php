<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo'; 
    $usuario = 'root';
    $senha = '';

    try {
        $conexão = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios where id= 4
        ';

        $stmt = $conexão->query($query);
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);

        echo '<pre>'; 
        print_r($usuario);
        echo '</pre>';

        echo $usuario->nome;

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().'Mensagem:'.$e->getMessage();
        //Registrar Erro
    }
    
?>