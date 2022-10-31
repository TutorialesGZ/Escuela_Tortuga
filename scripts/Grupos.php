<?php
require_once ("../scripts/conexion.php");
class Grupos{
    private  $conexion;
    private $strClave;
    private $strDescripcion;
    private $strTutor;

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function insertarGrupos(string $clave, string $descripcion,string $tutor):bool{
        $this->strClave = $clave;
        $this->strDescripcion = $descripcion;
        $this->strTutor = $tutor;
         $data = array($this->strClave,$this->strDescripcion,$this->strTutor);
         $sql = "INSERT INTO grados_grupos VALUES (?,?,?)";
         $insert = $this->conexion->prepare($sql);
         $reInsert = $insert->execute($data);
         if($reInsert){
            return true;
         }else{
            return false;
         }
    }
    public function getGrupos(){
        $sql = "SELECT * FROM grados_grupos";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    public function getGrupo(string $id){
        $sql = "SELECT * FROM grados_grupos WHERE clave='$id'";
        $prepare = $this->conexion->query($sql);
        $request = $prepare->fetchall(PDO::FETCH_ASSOC);
        return $request;

    }
    public function getDocentes(){
        $sql = "SELECT * FROM docentes";
        $ejecutar = $this->conexion->query($sql);
        $request = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
        return $request;
    }

    public function deleteGrupos(string $clave):bool{
        $sql = "DELETE FROM grados_grupos WHERE clave = ?";
        $data = array($clave);
        $execute = $this->conexion->prepare($sql);
        $execute->execute($data);
        if($execute){
            return true;
        }else{
            return false;
        }
    }

    public function updateGrupos(string $clave, string $descripcion, string $tutor):bool{
        $sql = "UPDATE grados_grupos SET descripcion =?, tutor =? WHERE clave =?";
        $data = array($descripcion, $tutor, $clave);
        $update = $this->conexion->prepare($sql);
        $request = $update->execute($data);
        if($request){
            return true;
        }else{
            return false;
        }
    }

    public function searchGrupos(string $where){
        $sql = "SELECT * FROM grados_grupos $where";
        $query = $this->conexion->prepare($sql);
        $query->execute();
        $request = $query->fetchAll(PDO::FETCH_ASSOC);
        return $request;
    }
        


}

?>