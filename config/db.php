<?php
require "../public/index.php";

class Database {
private $dsn;
private $username;
private $password;
private $pdo;

public function __construct() {
    $this->dsn = $_ENV["DB_DSN"];
    $this->username = $_ENV["DB_USER"];
    $this->password = $_ENV["DB_PASSWORD"];
    $this->connect();
}
public function connect() {
    try {
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Success";
    } catch(PDOException $error) {
        echo "failed to connect: " . $error->getMessage();
    }
}
public function getConnection() {
    return $this->pdo;
}
}

$co = new Database();
$co->getConnection();