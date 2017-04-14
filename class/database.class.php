<?php

Class database
{   
// Configurer ici les informations de connexion à la base

    //Configuration de la Base de données
    private $serverName="localhost";
    private $serverPort="9000";
    private $databaseName="creationpascale";
    private $databaseUser="root";
    private $databasePassword="root";
    private $connection=null;
    
    private function __construct()
    {        
        $serverName = $this->serverName;
        $databasePort = $this->serverPort;
        $databaseName = $this->databaseName;
        $databaseUser = $this->databaseUser;
        $databasePassword = $this->databasePassword;
       
                
        if (!isset($this->connection))
        {
            $this->connection = new PDO('mysql:host='.$serverName.':'.$databasePort.';dbname='.$databaseName.';',$databaseUser,$databasePassword);
        }
    }

    public static function connect()
    {
        static $database = null;
        if (!isset($database))
        {
            $database = new database();
        }
        return $database->connection;
    }
}
?>