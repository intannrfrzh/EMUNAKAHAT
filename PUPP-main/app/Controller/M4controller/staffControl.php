<?php
$database = new Database();
$conn = $database->connect(); // Get the database connection object

if ($conn) {
    $m4Model = new M4model($conn); // Pass the connection object to M4Model
    $staffController = new staffControl($m4Model); // Pass the M4Model object to userController
} else {
    // Handle the case when the database connection fails
    // Display an error message or take appropriate action
}

class staffControl {

    private $M4model;

    public function __construct($M4model)
    {
        $this->M4model = $M4model;
    }

}


