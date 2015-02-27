<html>
  <head>
    <title><?php echo "{$patient->surname} {$patient->name} - Last examination data" ?></title>
  </head>
  <body>
    <?php
      echo "Name: {$patient->surname} {$patient->name}<br />";
      echo "Date of birth: {$patient->dob}<br />";
      echo "PESEL: {$patient->pesel}<br />";
      echo "Last examination time and date: {$patient->exam_date}<br />";
      echo "Exam type: {$patient->exam_type}<br />";
      echo "Notes: {$patient->exam_notes}<br />";
      echo "Temperature:
      <select>
        <option> {$patient->temperature} Celcius</option>
        <option> ".$patient->temperature*33.8." Fahrenheit</option>
      </select><br />";

      echo "Weight:
      <select>
        <option> {$patient->weight} kgs</option>
        <option>".$patient->weight*2.20462." lbs</option>
      </select><br />";

     ?>
  </body>
</html>
