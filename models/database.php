<?php
class database
{
    private $_dbUser;
    private $_dbPassword;
    private $_dbHost;
    protected $_dbName;
    private $_connection;
    private static $_instance;
    private function __construct()
    {

        $this->_dbHost = "localhost";
        $this->_dbUser = "root";
        $this->_dbPassword = "";
        $this->_dbName = "omar";
        $this->_connection = new \PDO('mysql:host=' . $this->_dbHost . '; dbname=' . $this->_dbName, $this->_dbUser, $this->_dbPassword);

        $this->_connection->exec("SET CHARACTER SET utf8");
    }
    public function prepare($sql)
    {
        return $this->_connection->prepare($sql);
    }

    public static function instance()
    {
        if (!isset(self::$_instance)) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }
        return self::$_instance;
    }

    public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
}

/* $connection = Database::instance();
$sql = "SELECT * FROM fotos";
$query = $connection->prepare($sql);
$query->execute();
$users = $query->fetchAll();

foreach ($users as $row) {
    echo  $row['ruta'];
} */
