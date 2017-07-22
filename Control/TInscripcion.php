<?php
session_start();

require_once("../Negocio/Asistente.php");
require_once("../Negocio/Cargo.php");
require_once("../Negocio/Empresa.php");


//Rescatando valores del formulario
if(isset($_POST["emp"]) && $_POST["emp"]!="")
{ $empresa=$_POST["emp"]; $id_empresa=NULL;}

if(isset($_POST["car"]) && $_POST["car"]!="")
{ $cargo=$_POST["car"]; $id_cargo=NULL;}

if(isset($_POST["nombre"]) && $_POST["nombre"]!="")
{ $nombre=$_POST["nombre"];}

if(isset($_POST["apellidos"]) && $_POST["apellidos"]!="")
{ $apellidos=$_POST["apellidos"];}

if(isset($_POST["tel"]) && $_POST["tel"]!="")
{ $tel=$_POST["tel"];}

if(isset($_POST["email"]) && $_POST["email"]!="")
{ $email=$_POST["email"];}



if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ //Trigger insercion
    $objCargo= new Cargo($id_cargo, $cargo);
    $objCargo->insertarCargo();
    $objCargo=$objCargo->buscarCargo($cargo);
    
    $objEmpresa=new Empresa($id_empresa, $empresa);
    $objEmpresa->insertarEmpresa();
    $objEmpresa=$objEmpresa->buscarEmpresa($empresa);
    
    $id_asistente=NULL; $codigoentrada="Test";$asistencia=False;
    
    $objAsistente= new Asistente($id_asistente, $nombre, $apellidos, $email, $telefono, $asistencia, $codigoentrada, $objCargo->getId_cargo(), $objEmpresa->getId_empresa());
    $result=$objAsistente->insertarAsistente();
    if($resul!="") header("Location:../login.php");
  else

  { 
  }
 

}
?>
