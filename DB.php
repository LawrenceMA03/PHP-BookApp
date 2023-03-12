<?php
class DB {
    private static $_singleton;
    private $_connection;

    private $DB_USERNAME = 'root';
    private $DB_PASSWORD = 'root'; // leave empty on windows
    private $DB_HOST = 'localhost';
    private $DB_SCHEMA = 'bookapp';

    private function __construct() {
        $this->_connection = new PDO(
            "mysql:host=$this->DB_HOST;dbname=$this->DB_SCHEMA",
            $this->DB_USERNAME,
            $this->DB_PASSWORD
        );
        $this->_connection->exec("SET CHARACTER SET utf8");
    }

    public static function getInstance() {
        if (is_null(self::$_singleton)) {
            self::$_singleton = new DB();
        }
        return self::$_singleton;
    }

    public function getHandler() {
        return $this->_connection;
    }
}