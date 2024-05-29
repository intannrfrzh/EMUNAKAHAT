<?php

class userRequestController {

    private $M2model;

    public function __construct($M2model)
    {
        $this->M2model = $M2model;
    }

    public function getApplicantInfo($applicant_IC) {
        $applicantInfo = $this->M2model->retrieveApplicant($applicant_IC);
        return $applicantInfo;
    }

    public function getPartnerInfo($partner_IC) {
        $partnerInfo = $this->M2model->retrievePartner($partner_IC);
        return $partnerInfo;
    }
//user insert values
    public function WaliForm($wali_name,$wali_address,$wali_DOB,$wali_age,$wali_phone_number,$wali_relationship)
    {
        $id=$this->M2model->WaliInsert($wali_name,$wali_address,$wali_DOB,$wali_age,$wali_phone_number,$wali_relationship);
    }
    

    public function WitnessForm($witness1_name,$witness2_name,$witness1_phone_number,$witness2_phone_number,$witness1_address,$witness2_address)
    {
        $id=$this->M2model->WitnessInsert($witness1_name,$witness2_name,$witness1_phone_number,$witness2_phone_number,$witness1_address,$witness2_address);
    }

    public function RequestForm($request_date,$request_marriagecountry, $request_marriagestate, $request_marriageplace, $request_marriagedate,$request_dowrytype,$request_dowryamount) {

        $id = $this->M2model->RequestInsert($request_date,$request_marriagecountry, $request_marriagestate, $request_marriageplace, $request_marriagedate,$request_dowrytype,$request_dowryamount);

    }

    public function uploadFile($file) {
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
            
            echo "File uploaded successfully.";
        } else {
            // Handle the file move failure
            echo "Error moving file.";
        }
    }
    


    public function Uploadpayment($coursepayment2){

        $upload = $coursepayment2['file_name'];

            // Check for errors during the upload
        $file = $_FILES['file'];
        $fileError = $file['error'];
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
        $fileName = ''; // Assign a default value to the variable
        $destination = $uploadsDir . $fileName;
        $fileTmpName = $file['tmp_name'];
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
