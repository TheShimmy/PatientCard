<html>
  <head>
    <title>List of patients</title>
  </head>
  <body>
    <?php
        echo "Patients' list:";
        foreach ($patients as $id => $patient) {
          echo "{$patient->surname} {$patient->name}, PESEL: {$patient->pesel}";
          echo " <a href='index.php?patient={$id}'>Show last examination</a><br />";
          //Not implemented
          //Route to form or JS showForm action
          //<form action="index.php?patient{$id}&update=true" method="post">
        }
     ?>
  </body>
</html>
