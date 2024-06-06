<?php

class userControl {

    private $M4model;

    public function __construct($M4model)
    {
        $this->M4model = $M4model;
    }

    public function registrationConsultInfo($consultationType, $Description, $request_DateTime,  $partner_IC, $partner_Name, $applicant_IC, $applicant_Name) {

        $id = $this->M4model->registrationConsultInfo($consultationType, $Description, $request_DateTime,  $partner_IC, $partner_Name, $applicant_IC, $applicant_Name);

    }

}

