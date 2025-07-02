<?php
include_once __DIR__. './../modelo/Conexao.php';
include_once __DIR__. './../modelo/Usuario.php';
include_once __DIR__. './../modelo/UsuarioDAO.php';

$daoUsuario=new UsuarioDAO();
$daoUsuario->insere(new Usuario("João","joao@gmail.com","joao"));
echo var_dump($daoUsuario->busca_usr_email("joao@gmail.com"));

echo "<pre>";
print_r (var_dump($daoUsuario->lista_todos()));
echo "</pre>";

echo "teste autenticacao";
echo var_dump($daoUsuario->autenticar("joao@gmail.com","joao"));
echo var_dump($daoUsuario->autenticar("joao@gmail.com","jroao"));
?>