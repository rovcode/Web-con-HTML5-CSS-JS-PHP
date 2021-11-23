<?php

class Conexion
{
    protected $VAR_PDO = null;
    protected $VAR_DB = "c3u2yq869upbm7xf";
    protected $VAR_SERVER = "frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
    public function getConexion()
    {
        try
        {
            $this->VAR_PDO = new PDO("mysql:host=" . $this->VAR_SERVER . ";dbname=" . $this->VAR_DB . "", "f9accbyl9g2ctzzp", "nnkardo1ar0mazk6");
            if ($this->VAR_PDO) {
                // echo "Conectado a <b>" . $this->VAR_DB . "</b>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage . "<br>";
        }
        return $this->VAR_PDO;
    }
}
