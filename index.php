<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo'; 
    $usuario = 'root';
    $senha = '';

    try {
        $conexão = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexão->query($query);
        $lista = $stmt->fetchAll();

        echo '<pre>'; 
        echo $lista[0]['nome'];
        echo '</pre>';

        echo '<pre>'; 
        echo $lista[2]['email'];
        echo '</pre>';


    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().'Mensagem:'.$e->getMessage();
        //Registrar Erro
    }
    

?>