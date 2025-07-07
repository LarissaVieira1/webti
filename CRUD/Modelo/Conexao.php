<?php
class Conexao{

    public static function getConexao(){

        //Classe PDO connection $dbh = new PDO('mysql:host=localhost;dbname=test'. $user, $pass);

        return new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'root', 'aluno',
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    }
}

?>