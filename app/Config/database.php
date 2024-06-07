<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "systemkahwin";

// Create a MySQLi connection
$connect = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
;

class Database {

    // Declaring Variables of Server
    private $host = "localhost";
    private $db_name = "systemkahwin";
    private $username = "root"; 
    private $password = "";

    // PDO connection method
    public function connect() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            // Error Message
            echo "Connection error: " . $exception->getMessage();
        }
        return $conn;
    }
}

