<?php
require_once 'connection.php';

   
   
 $q = $pdo->query("call getAppointmentSlot()");
 $q->setFetchMode(PDO::FETCH_ASSOC);
 $result = array();
   while ($r = $q->fetch()):
      $result[] =($r);    
    endwhile; 
  echo json_encode($result);


?>