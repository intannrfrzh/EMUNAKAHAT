
<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "systemkahwin";

$connect = mysqli_connect($db_server,$db_user,$db_pass,$db_name);


class Database {

    //Decluring Variable of Server
    // private $host = "sql12.freemysqlhosting.net";
    // private $db_name = "sql12617882";
    // private $username = "sql12617882";
    // private $password = "Px4zDGzKcL";

    private $host = "localhost";
    private $db_name = "systemkahwin";
    private $username = "root"; 
    private $password = "";

    
    public function connect() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $exception) {

            //Error Message
            echo "Connection error: " . $exception->getMessage();
        }
        return $conn;
    }
}
?>