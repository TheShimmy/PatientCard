<?php

class Card {
  public $name, $surname, $dob, $pesel;
  public $exam_type, $exam_notes, $exam_date, $weight, $temperature;

  public function withExamData($patientExamData) {
    $cardExamData = new Card();
    $cardExamData->name = $patientExamData['name'];
    $cardExamData->surname = $patientExamData['surname'];
    $cardExamData->dob = $patientExamData['dob'];
    $cardExamData->pesel = $patientExamData['pesel'];
    $cardExamData->exam_type = $patientExamData['exam_type'];
    $cardExamData->exam_notes = $patientExamData['exam_notes'];
    $cardExamData->exam_date = $patientExamData['exam_date'];
    $cardExamData->weight = $patientExamData['weight'];
    $cardExamData->temperature = $patientExamData['temperature'];
    return $cardExamData;
  }

  public function onlyPersonalData($patientData) {
    $cardPersonalData = new Card();
    $cardPersonalData->name = $patientData['name'];
    $cardPersonalData->surname = $patientData['surname'];
    $cardPersonalData->pesel = $patientData['pesel'];
    return $cardPersonalData;
  }

}

 ?>
