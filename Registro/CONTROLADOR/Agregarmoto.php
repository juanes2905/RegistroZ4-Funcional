<?php
require_once('../MODELO/Motos.php');
if($_POST){
    $Moto =new Moto();
    $Placa_moto=$_POST["Placa_moto"];
    $modelo_moto=$_POST["modelo_moto"];
    $Cilindraje_moto=$_POST["Cilindraje_moto"];
    $kilometros_recorridos=$_POST["kilometros_recorridos"];
    $fecha=$_POST["fecha"];
    $Caracteristicas=$_POST["Caracteristicas"];
    //var_dump($_POST);
     
    $Moto->Agregar($Placa_moto,$modelo_moto,$Cilindraje_moto,$kilometros_recorridos,$fecha,$Caracteristicas);
}else{
    //header('#');
}

?>