<?php
/*
    Usuario: Los campos con los que debe contar el usuario son:
        id auto-incrementable.
        Nombre de usuario.
        Password.
        Nombres.
        Apellidos.
        Fecha de nacimiento.
        Correo Electronico.
        Créditos 
*/

class Conectar
{
    public static function conexion(){
        try{
            $conexion = new PDO('mysql:host=localhost; dbname=usuariomvc;','PHPBD','');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");

        }catch(Exception $e){
          die("Error".$e->getMessage());
          echo "Linea Del Error".$e->getLine();
        }
        return $conexion;
    }
}

?>