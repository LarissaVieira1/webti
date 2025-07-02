<?php
class Conexao{
    public static function getConexao(){
       //mysql__connect("localhost", "usuario", "senha", "bd");
       
       //Classe PDO connection
        return new PDO('mysql:host=localhost;dbname=crud', "root", "admin",
  [  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE=> PDO:: FETCH_ASSOC
     ]
    );
   }

}
?>