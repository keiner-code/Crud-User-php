<?php
class UsuarioControl{

    function __construct()
    {
        
    }
     
    function AgregarUsu($vector){
        require_once("Modelo/Usuario.php");
        require_once("Modelo/UsuarioModelo.php");

        $usu = new Usuario();
        $usuModelo = new UsuarioModelo();

        $usu->setNombreUsuario($vector["NombreUsuario"]);
        $usu->setPassword($vector["Password"]);
        $usu->setNombre($vector["Nombre"]);
        $usu->setApellido($vector["Apellido"]);
        $usu->setFechaNacimiento($vector["FechaNacimiento"]);
        $usu->setCorreo($vector["Correo"]);
        $usu->setCreditos($vector["Creditos"]);
        return $usuModelo->AgregarUsuario($usu);

    }
    function ListaUsuar(){
        require_once("Modelo/UsuarioModelo.php");
        $UsuModelo = new  UsuarioModelo();
        $rest = $UsuModelo->ListarUsuario();
        $vector = array();

            foreach ($rest as $obj){
                  $vector[] = array($obj->getNombreUsuario(),
                                  $obj->getNombre(),
                                  $obj->getApellido(),
                                  $obj->getPassword(),
                                  $obj->getFechaNacimiento(),
                                  $obj->getCorreo(),
                                  $obj->getCreditos());
            }
            
            return $vector;
    }
    function BuscarUsuarios($contrasena){
           require_once("Modelo/UsuarioModelo.php");
           $UsuM = new UsuarioModelo();
           $datos = $UsuM->BuscarUsuario($contrasena);
           //var_dump($datos);
           $arr = array();
           foreach($datos as $objeto){
              $arr[] = array($objeto->getNombreUsuario(),
                           $objeto->getNombre(),
                           $objeto->getApellido(),
                           $objeto->getPassword(),
                           $objeto->getFechaNacimiento(),
                           $objeto->getCorreo(),
                           $objeto->getCreditos());
           }
          
          return $arr;
    }

    function ActualizarUsu($vector){
        require_once("Modelo/Usuario.php");
        require_once("Modelo/UsuarioModelo.php");

        $usu = new Usuario();
        $usuModelo = new UsuarioModelo();

        $usu->setNombreUsuario($vector["NombreUsuario"]);
        $usu->setPassword($vector["Password"]);
        $usu->setNombre($vector["Nombre"]);
        $usu->setApellido($vector["Apellido"]);
        $usu->setFechaNacimiento($vector["FechaNacimiento"]);
        $usu->setCorreo($vector["Correo"]);
        $usu->setCreditos($vector["Creditos"]);
        return $usuModelo->ActualizarUsuario($usu);
    }
    function EliminarUsu($dato){
        require_once("Modelo/Usuario.php");
        require_once("Modelo/UsuarioModelo.php");

        $usu = new Usuario();
        $usuModelo = new UsuarioModelo();

        $usu->setNombreUsuario($vector["NombreUsuario"]);
        $usu->setPassword($vector["Password"]);
        $usu->setNombre($vector["Nombre"]);
        $usu->setApellido($vector["Apellido"]);
        $usu->setFechaNacimiento($vector["FechaNacimiento"]);
        $usu->setCorreo($vector["Correo"]);
        $usu->setCreditos($vector["Creditos"]);
        return $usuModelo->EliminarUsuario($dato);
    }

}