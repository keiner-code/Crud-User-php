<?php
class Usuario{
    private $NomUsuario;
    private $Nombre;
    private $Apellido;
    private $Password;
    private $FechaNacimiento;
    private $Correo;
    private $Creditos;


    function __construct()
    {    
    }
    function getNombreUsuario(){
       return  $this->NomUsuario;
    }
    function setNombreUsuario($NomUsuario){
        $this->NomUsuario = $NomUsuario;
    }
    function getNombre(){
        return $this->Nombre;
    }
    function setNombre($nombre){
        $this->Nombre = $nombre;
    }
    function getApellido(){
        return $this->Apellido;
    }
    function setApellido($apellido){
        $this->Apellido = $apellido;
    }
    function getPassword(){
        return $this->Password;
    }
    function setPassword($password){
        $this->Password = $password;
    }
    function getFechaNacimiento(){
        return $this->FechaNacimiento;
    }
    function setFechaNacimiento($fechanaci){
        $this->FechaNacimiento = $fechanaci;
    }
    function getCorreo(){
        return $this->Correo;
    }
    function setCorreo($correo){
        $this->Correo = $correo;
    }
    function getCreditos(){
        return $this->Creditos;
    }
    function setCreditos($credito){
        return $this->Credito = $credito;
    }

}