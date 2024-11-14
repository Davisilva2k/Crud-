<?php
if(isset($_COOKIE['usuario_logado'])){
$usuario = htmlspecialchars($_COOKIE['usuario_logado']);
}else{
    header('location:')
}