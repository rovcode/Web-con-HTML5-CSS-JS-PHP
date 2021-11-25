<?php

class Conexion
{
    protected $VAR_PDO = null;
    protected $VAR_DB = "dbstore";
    protected $VAR_SERVER = "localhost:3306";
    public function getConexion()
    {
        try
        {
            $this->VAR_PDO = new PDO("mysql:host=" . $this->VAR_SERVER . ";dbname=" . $this->VAR_DB . "", "root", "");
            if ($this->VAR_PDO) {
                 //echo "Conectado a <b>" . $this->VAR_DB . "</b>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage . "<br>";
        }
        return $this->VAR_PDO;
    }
}
