<?php 
class DBConnection {

    private function __DBConnection()
    {
        return $this->connect();
    }

    private $DB_HOST = "localhost";
    private $DB_USER = "root";
    private $DB_PASSWORD = "";
    private $DB_DATABASE = "reg";
    
     
    private function connect() {
        $con = mysqli_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD) or die("Conexão não realizada" . mysqli_error($con));
        mysqli_select_db($con, $this->DB_DATABASE) or die("Erro ao escolher banco " . mysqli_error($con));
        return $con;
    }
    private function close($con) {
        mysqli_close($con);
    }

    function setSql($sql)
    {
        $con = $this->connect();
        $con->query($sql);
        $this->close($con);
    }

    public function getSql ($sql) {
        $con = $this->connect();
        $resultCon = $con->query($sql);
        if (!$resultCon) {
            return ['mensagem'=>'erro no select: '.$sql];
        }
        $result = $resultCon->fetch_all();
        if ($result) {
            return $result;
        }else {
            return ['mensagem'=>'nenhum registro encontrado'];
        }

    }

    
 

}

?>