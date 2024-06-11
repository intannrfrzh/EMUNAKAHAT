<?php

class userCourseController {

    private $M2model;

    public function __construct($M2model)
    {
        $this->M2model = $M2model;
    }

    public function getcourseInfo($course_ID)
    {
        $userInfo = $this->M2model->retrieveCourse($course_ID);
        $courseInfo = null;
        return $courseInfo;
    }

    public function getUserInfo($IC) {
        $userInfo = $this->M2model->retrieveUser($IC);
        return $userInfo;
    }

    public function CourseForm($c_app_state, $c_app_jobsector, $c_app_educationlevel, $c_app_date) {

        $id = $this->M2model->CourseInsert($c_app_state, $c_app_jobsector, $c_app_educationlevel, $c_app_date);

    }

    public function Uploadpayment($coursepayment){

        $upload = $coursepayment['file_name'];

            // Check for errors during the upload
        $fileError = $_FILES['file']['error'];
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
        $fileName = 'example.txt'; // Assign a value to the variable '$fileName'
        $destination = $uploadsDir . $fileName;
        $fileTmpName = $_FILES['file']['tmp_name'];
        if (move_uploaded_file($fileTmpName, $destination)) {
            // Pass the file path to the model for further processing
            $this->M2model->uploadFile($destination);
            echo "File uploaded successfully.";
        } else {
            // Handle the file move failure
            echo "Error moving file.";
        }
    }

 
}
