<?php
include('model/card.php');

class Model {

  private function checkDatabaseConnection($conn) {
    if(is_null($conn))
      throw new Exception('No db connection');
  }

  public function getPatientsList() {
    //Retrieve list of all patietns
    $query = "SELECT * FROM `patients` ORDER BY `surname`, `name`";
    checkDatabaseConnection($conn);
    $statement = $conn->query($query);
    $patientsList = array();
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $patientsList[$row['patientID']] = Card::onlyPersonalData($row);
    }
    return $patientsList;
  }

  public function getPatientCard($patientID) {
    //Retrieve last examination data
    $query = "SELECT * FROM `examinations` as e
    INNER JOIN `patients` as p ON p.patientID = e.patientID
    WHERE e.patientID = {$patientID}
    ORDER BY e.exam_date DESC
    LIMIT 1";
    checkDatabaseConnection($conn);
    $statement = $conn->query($query);
    if($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $patientCard = Card::withExamData($row);
    }
    return $patientCard;
  }

  public function updatePatientCard() {
    //Insert new examinations data
    $query = "INSERT INTO `examinations` (`patientID`,`exam_type`,
              `exam_notes`,`exam_date`,`weight`,`temperature`)
              VALUES (:patientID, :exam_type, :exam_notes, :exam_date,
              :weight, :temperature)";
    checkDatabaseConnection($conn);
    $result = $conn->prepare($query);
    $result->execute(array(
      ":patientID" => $_POST['patientID'],
      ":exam_type" => $_POST['exam_type'],
      ":exam_notes" => $_POST['exam_notes'],
      ":exam_date" => $_POST['exam_date'],
      ":weight" => $_POST['weight'],
      ":temperature" => $_POST['temperature']
    ));
  }
}

 ?>
