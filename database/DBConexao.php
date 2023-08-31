<?php 

class DBConexao{
    //Configuração do banco de dados
    private $host = "localhost";
    private $dbname = "biblioteca";
    private $username = "root";
    private $password = "senac2023"; 

    private $conx;
    private static $instance = null;

    public function __construct()
    {
      try{
        //Inicializar a conexão
        $this->conx = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->username,$this->password);
        $this->conx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      }catch(PDOException $e){
        //Capturar erro da conexão
        echo "Erro na conexão com o banco de dados:".$e->getMessage();
      }  
    }
    /**
     * Método estatico para obter a instancia única da conexão (implementação do Singleton)
     */
    public static function getConexao(){
        if(!self::$instance){
            self::$instance = new DBConexao();
        }
        return self::$instance->conx;
    }
}