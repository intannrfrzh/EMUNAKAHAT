<?php

class userController
{

    private $M5model;

    public function __construct($M5model)
    {
        $this->M5model = $M5model;
    }

    // function to pass the input of grooms job to the model
    public function jobForm($job, $jobsType, $Salary, $nameAddress)
    {


        $id = $this->M5model->groomsJobInsert($job, $jobsType, $Salary, $nameAddress);
    }

    // function to pass the input of close relative to the model

    public function closeForm($closeName, $closeRelation, $closePhone)
    {

        $id = $this->M5model->closeInsert($closeName, $closeRelation, $closePhone);
    }

    // function to pass the ic to the model and also pass the $userInfo to the index

    public function getUserInfo($IC)
    {
        $userInfo = $this->M5model->retrieveUser($IC);
        return $userInfo;
    }

    // function to pass the partneric to the model and also pass the $partnerInfo to the index
 
    public function getpartnerInfo($partnerIC)
    {
        $partnerInfo = $this->M5model->retrievePartner($partnerIC);
        return $partnerInfo;
    }

   
    // function to pass the upload file to the model 

    public function uploadFile($file)
    {
        // Process the uploaded file
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];

        // Check for errors during the upload
        if ($fileError !== UPLOAD_ERR_OK) {
            // Handle the error appropriately (e.g., display an error message)
            echo "Error uploading file.";
            return;
        }

        // Validate file type, size, or perform any other necessary checks here

        // Create the 'uploads' directory if it doesn't exist
        $uploadsDir = 'uploads/';
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir);
        }

        // Move the uploaded file to the desired location
        $destination = $uploadsDir . $fileName;
        if (move_uploaded_file($fileTmpName, $destination)) {
            // Pass the file path to the model for further processing
            $this->M5model->uploadFile($destination);
            echo "File uploaded successfully.";
        } else {
            // Handle the file move failure
            echo "Error moving file.";
        }
    }
}
