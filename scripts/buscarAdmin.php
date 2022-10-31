<?php
require_once("conexion.php");
require_once("./userSession.php");
      class IngresarHome{
        private $strEmail;
        private $strmatricula;
        private $strnombre;
        private $strap;
        private $stram;
        private $intNumIn;
        private $intNumEx;
        private $strCalle;
        private $strColonia;
        private $strMunicipio;
        private $strEstado;
        private $intCel;
        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }
        public function insertAlumnos(string $matricula, string $nombre, 
        string $ap, string $am, int $numIn, int $numEx, string $calle, 
        string $colonia, string $municipio,string $estado, int $cel, string $correo):bool{
          $this->strmatricula = $matricula;
          $this->strnombre = $nombre;
          $this->strap = $ap;
          $this->stram = $am;
          $this->intNumIn = $numIn;
          $this->intNumEx = $numEx;
          $this->strCalle = $calle;
          $this->strColonia = $colonia;
          $this->strMunicipio = $municipio;
          $this->strEstado = $estado;
          $this->intCel = $cel;
          $this->strEmail = $correo;

          $datos = array($this->strmatricula, $this->strnombre,$this->strap,
          $this->stram,$this->intNumIn,$this->intNumEx,$this->strCalle,
          $this->strColonia,$this->strMunicipio,$this->strEstado,$this->intCel,$this->strEmail);
          
          $sql = "INSERT INTO alumnos VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $reInsert = $insert->execute($datos);

          if($reInsert == 1){
            return true;
          }else{
            return false;
          }

          
        }

        public function getAlumnos(){
          $sql = "SELECT * FROM alumnos";
          $execute = $this->conexion->query($sql);
          $request = $execute->fetchall(PDO::FETCH_ASSOC);
          
          return $request;
        }
        //

        public function updateAlumnos(string $numeroControl,string $nombre, string $ap, string $am,
         int $numIn, int $numEx, string $calle, string $colonia, string $municipio,string $estado,
          int $cel, string $correo){
          $this->strnombre = $nombre;
          $this->strap = $ap;
          $this->stram = $am;
          $this->intNumIn = $numIn;
          $this->intNumEx = $numEx;
          $this->strCalle = $calle;
          $this->strColonia = $colonia;
          $this->strMunicipio = $municipio;
          $this->strEstado = $estado;
          $this->intCel = $cel;
          $this->strEmail = $correo;
              

          $sql = "UPDATE alumnos SET nombre=?,apellidoP=?,apellidoM=?,numeroIn=?,numeroEx=?,
          calle=?,colonia=?,municipio=?,estado=?,telefono=? ,email=? WHERE matricula=$numeroControl";
          $update = $this->conexion->prepare($sql);
          $datos = array($this->strnombre,$this->strap,$this->stram,$this->intNumIn,$this->intNumEx,
          $this->strCalle,$this->strColonia,$this->strMunicipio,$this->strEstado,$this->intCel,$this->strEmail);
          $resExecute = $update->execute($datos);
          
          if($resExecute){
            return true;
          }else{
            return false;
          }
        }

        public function buscarUsuario(string $where){
          $sql = "SELECT * FROM alumnos $where";
            $query = $this->conexion->prepare($sql);
            $query->execute();
            $request = $query->fetchall(PDO::FETCH_ASSOC);
            return $request;

        }

        public function deleteAlumnos($matricula){
          $sql = "DELETE FROM alumnos WHERE matricula=?";
          $data = array($matricula);
          $query = $this->conexion->prepare($sql);
          $query->execute($data);
          if($query == ""){
            return true;
          }else{
            return false;
          }
          //return $query;
        }
        public function getAlumnosId($id){
          $sql = "SELECT * FROM alumnos WHERE matricula=$id";
          $execute = $this->conexion->query($sql);
          $request = $execute->fetchall(PDO::FETCH_ASSOC);
          
          return $request;
        }

        public function getUsuarios(string $email, string $password):bool{
            
            $sql = "SELECT* FROM admin WHERE email = ? AND cedulaprofesional = ?";
            $arrData = array($email,$password);
            $query = $this->conexion->prepare($sql);    
            $query->execute($arrData);     
            $request = $query->fetch(PDO::FETCH_ASSOC);
            //print_r($request);
            if ($request!= null) {
              $sesionObj = new UserSession();
              //echo $request['nombre'];
              $sesionObj->setUsuario($request['nombre']);
              //$xd = $sesionObj->getUser();
              //echo $xd;
              return true;
            }else{
              return false;
            }
        }
      }

      
     

?>