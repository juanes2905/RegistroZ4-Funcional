<?php
require_once('Conexion.php');
class Moto{
    private $pdo;//variable para conexion
    
    public $Placa_moto;
    public $modelo_moto;
    public $Cilindraje_moto;
    public $kilometros_recorridos;
    public $fecha;
    public $Caracteristicas;
  

    //public $idRolUsuario;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::StartUp(); //SE CONECTA CON LA BASE DE DATOS A TRAVES DE LA FUNCION STARTUP
        } 
        catch (Exception $e) 
        {  echo "HAY PROBLEMAS DE CONEXION";
           die($e->getMessage());
        }
    }

    public function Agregar($Placa_moto,$modelo_moto,$Cilindraje_moto,$kilometros_recorridos,$fecha,
    $Caracteristicas){
        $stm=$this->pdo->prepare("insert into Moto values (:Placa_moto,:modelo_moto,:Cilindraje_moto,:kilometros_recorridos,:fecha,
        :Caracteristicas)");
        $stm->bindParam(':Placa_moto',$Placa_moto);
        $stm->bindParam(':modelo_moto',$modelo_moto);
        $stm->bindParam(':Cilindraje_moto',$Cilindraje_moto);
        $stm->bindParam(':kilometros_recorridos',$kilometros_recorridos);
        $stm->bindParam(':fecha',$fecha);
        $stm->bindParam(':Caracteristicas',$Caracteristicas);
        if($stm->execute()){
            echo('<script type="text/javascript">alert("Moto Guardada Correctamente"); window.location.href="index.php";</script>');
        }else{
            echo('<script type="text/javascript">alert("¡Error! No se pudo registrar la moto");window.location.href="index.php";</script>');
        }
    }

}