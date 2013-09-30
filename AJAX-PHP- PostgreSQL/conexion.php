<?php
class conexion {
   
    private $server="";
    private $usr="";
    private $pass="";
    private $db="";
    
    
    public function __construct($servidor,$base,$usuario,$contra) {
        $this->server=$servidor;
        $this->db=$base;
        $this->usr=$usuario;
        $this->pass=$contra;
    }
    
    public function objconexion(){
        $cs="host=$this->server port=5432 dbname=$this->db user=$this->usr password=$this->pass";
        $con=  pg_connect($cs);
                
        return $con;
        
    }
    
    public function CUD($query){
        
        if ($consulta = pg_query($this->objconexion(), $query) == TRUE){
            return true;
        }  else {
            return pg_errormessage($this->objconexion());
        }   
    }
    
    public function Extraer($query){
        $respuesta=  pg_query($this->objconexion(),$query);
        return $respuesta;
    }
}
?>