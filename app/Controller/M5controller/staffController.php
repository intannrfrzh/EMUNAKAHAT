<?php

class staffController {

    private $M5model;

    public function __construct($M5model)
    {
        $this->M5model = $M5model;
    }

    // retrieve incentive form information fromt the model 

    public function Retrieveincentive() {

        return $this->M5model->incentiveRetrieve();

    }

}

