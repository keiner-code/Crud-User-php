<?php
class UsuarioModelo{
    private $db;
    //private $usuarios;
     
    public function __construct()
    { 
        require_once("Conectar.php");
        $this->db = Conectar::conexion();
        $this->usuarios=array();
    }

    public function AgregarUsuario($usuario){
        $Nombreusuario = $usuario->getNombreUsuario();
        $Password = $usuario->getPassword();
        $Nombres = $usuario->getNombre();
        $Apellidos = $usuario->getApellido();
        $Fechanacimiento = $usuario->getFechaNacimiento();
        $Correo = $usuario->getCorreo();
        $Creditos = $usuario->getCreditos();
        $script = "INSERT INTO usuario(nombreusuario,nombre,contrasena,apellido,fechanacimiento,correo,creditos)
                   VALUES('$Nombreusuario','$Nombres','$Password','$Apellidos','$Fechanacimiento','$Correo','$Creditos')";
                   if($this->db->query($script)){
                       return true;
                   }else{
                       return false;
                   }
    }

    public function ListarUsuario(){
        $consulta = $this->db->query("SELECT * FROM usuario");
        
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            require_once("Usuario.php");
            $usu = new Usuario();
            $usu->setNombreUsuario($fila["nombreusuario"]);
            $usu->setNombre($fila["nombre"]);
            $usu->setPassword($fila["contrasena"]);
            $usu->setApellido($fila["apellido"]);
            $usu->setFechaNacimiento($fila["fechanacimiento"]);
            $usu->setCorreo($fila["correo"]);
            $usu->setCreditos($fila["creditos"]);
            $this->usuarios[] = $usu; 
        }
        return $this->usuarios;
    }
    public function BuscarUsuario($dato){

    $consulta = $this->db->query("SELECT * FROM usuario WHERE contrasena = $dato");

         if($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            require_once("Usuario.php");
            $usu = new Usuario();
            $usu->setNombreUsuario($fila["nombreusuario"]);
            $usu->setNombre($fila["nombre"]);
            $usu->setPassword($fila["contrasena"]);
            $usu->setApellido($fila["apellido"]);
            $usu->setFechaNacimiento($fila["fechanacimiento"]);
            $usu->setCorreo($fila["correo"]);
            $usu->setCreditos($fila["creditos"]);
        }else{
            echo "No entro";
        }
        $this->usua[] = $usu;
        return $this->usua;
    }
    public function ActualizarUsuario($usuario){
        $nomU = $usuario->getNombreUsuario();
        $pass = $usuario->getPassword();
        $nom = $usuario->getNombre();
        $ape = $usuario->getApellido();
        $fech = $usuario->getFechaNacimiento();
        $cor = $usuario->getCorreo();
        $cred = $usuario->getCreditos();
        $script = "UPDATE usuario SET nombreusuario = $nomU, nombre = $nom, apellido = $ape, fechanacimiento = $fech, correo = $cor, creditos = $cred WHERE id = $pass";

       if($consulta = $this->db->query($script)){
              return true;
       }else{
           return false;
       }
    }
       public function EliminarUsuario($id){
       
        $script = "DELETE FROM Usuario WHERE id = $id";

       if($consulta = $this->db->query($script)){
              return true;
       }else{
           return false;
       }
    }
}