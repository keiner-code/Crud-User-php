<?php

if (isset($_POST["Ingresar"])) {
    $controlador = $_POST["controlador"];
    $accion = $_POST["accion"];
    $vista1 = $_POST["vista1"];
      
        if(file_exists("controlador/{$controlador}.php")){
            require_once("controlador/{$controlador}.php");
            $con = new $controlador();
            $resp = $con->$accion($_POST);
            require_once("vista/{$vista1}.html");
        }else{
            echo "No existe";
        }
}else{
    require_once("vista/AgregarUsuVista.html");
}
if (isset($_POST["listar"])) {
    $controlador = $_POST["controlador"];
    $accion = $_POST["accionListar"];
    $vista1 = $_POST["vista1"];
         
         if(file_exists("controlador/{$controlador}.php")){
            require_once("controlador/{$controlador}.php");
            $con = new $controlador();
            $resp = $con->$accion($_POST);
            require_once("vista/{$vista1}.html");
        }else{
            echo "No existe";
        }
}else{
    require_once("vista/AgregarUsuVista.html");
}

if (isset($_POST["buscar"])) {
    $controlador = $_POST["controlador"];
    $accion = $_POST["accionbuscar"];
    $vista1 = $_POST["vista1"];
         
         if(file_exists("controlador/{$controlador}.php")){
            require_once("controlador/{$controlador}.php");
            $con = new $controlador();
            //$resp = $con->$accion($_POST);
            require_once("vista/{$vista1}.html");
        }else{
            echo "No existe";
        }
}else{
    require_once("vista/AgregarUsuVista.html");
}

if (isset($_POST["actualizar"])) {
    $controlador = $_POST["controlador"];
    $accion = $_POST["accionactualizar"];
    $vista1 = $_POST["vista1"];
         
         if(file_exists("controlador/{$controlador}.php")){
            require_once("controlador/{$controlador}.php");
            $con = new $controlador();
            $resp = $con->$accion($_POST);
            require_once("vista/{$vista1}.html");
        }else{
            echo "No existe";
        }
}else{
    require_once("vista/AgregarUsuVista.html");
}

if (isset($_POST["eliminar"])) {
    $controlador = $_POST["controlador"];
    $accion = $_POST["accionaEliminar"];
    $vista1 = $_POST["vista1"];
         
         if(file_exists("controlador/{$controlador}.php")){
            require_once("controlador/{$controlador}.php");
            $con = new $controlador();
            $resp = $con->$accion($_POST);
            require_once("vista/{$vista1}.html");
        }else{
            echo "No existe";
        }
}else{
    require_once("vista/AgregarUsuVista.html");
}