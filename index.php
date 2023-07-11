<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo'; 
    $usuario = 'root';
    $senha = '';

    try {
        $conexão = new PDO($dsn, $usuario, $senha);

        $query = '
            create table tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar (50) not null,
                email varchar (100) not null,
                senha varchar (32) not null
            )
        ';

        $retorno = $conexão->exec($query);
        //retorno 0
        echo $retorno;

        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values (
                "Carlos Henrique", "carlos@teste.com.br" , "12346789"
            )
        ';

        $retorno = $conexão->exec($query);
        //retorna 1
        echo $retorno;

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().'Mensagem:'.$e->getMessage();
        //Registrar Erro
    }
    

?>