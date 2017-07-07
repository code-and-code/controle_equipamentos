<?php namespace App;

class ImportSQL
{
    protected $db;
    private   $error;

    public function __construct()
    {
        $this->getDb($this->getConfigDataBase());
    }

    public function getConfigDataBase()
    {
        $database = include("App/config/app.php");
        return $database['database'];
    }

    function getFileDataBase()
    {
        $file = include("teste.sql");
        return $file;
    }

    public function getDb(array $config)
    {
        $db = "mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=utf8";
        $options = array(
            \PDO::ATTR_PERSISTENT    => true,
            \PDO::ATTR_ERRMODE       => \PDO::ERRMODE_EXCEPTION,
            //\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        );

        // Create a new PDO instanace
        try{
            $this->db = new \PDO($db, $config['username'], $config['password'], $options);
            //$this->db->exec("SET CHARACTER SET utf8");
        }
            // Catch any errors
        catch(\PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    public function run()
    {
       $this->import($this->getFileDataBase());
    }

    public function import($sql_file){

    }
}

$sql = new ImportSQL();

$sql->run();