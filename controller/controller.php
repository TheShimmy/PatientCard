<?php
include('model/model.php');

class Controller {
  public $model;

  public function __construct() {
    $this->model = new Model();
  }

  public function invoke() {
    if(!isset($_GET['patient'])) {
      $patients = $this->model->getPatientsList();
      include('view/patientslist.php');
    } else {
      if(isset($_GET['update']) && $_GET['update'] == 'true')
        $this->model->updatePatientCard();
      $patient = $this->model->getPatientCard($_GET['patient']);
      include('view/patientcard.php');
    }
  }
}

 ?>
