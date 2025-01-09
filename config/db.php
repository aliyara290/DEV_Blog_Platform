<?php
require __DIR__ . "/../vendor/autoload.php";
// require_once __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

class Database {
    private static $instance = null; 
    private $pdo;

    private function __construct() {
        $dsn = $_ENV["DB_DSN"];
        $username = $_ENV["DB_USER"];
        $password = $_ENV["DB_PASSWORD"];

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die("Failed to connect: " . $error->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    public function getConnection() {
        return $this->pdo;
    }
}
