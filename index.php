<?php
try {
  require_once('config.php');
  include('controller/controller.php');

  $controller = new Controller();
  $controller->invoke();


} catch (PDOException $e) {
  echo "DB Error: {$e->getMessage}";
} catch (Exception $e) {
  echo "Error: {$e->getMessage}";
}
 ?>
