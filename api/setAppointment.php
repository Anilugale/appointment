<?php
 require_once 'connection.php';
$data = json_decode(file_get_contents('php://input'), true);
$query ="call addAppontment('1','".$data['vendor_id']."', '1', 'desc',  '".$data['user']."', '".$data['mobile']."', '".$data['email']."')";
$result = array();
 try{
$q = $pdo->prepare($query);
 if($q->execute() == true){
     $result["code"] = true;
      $result["message"] = "done";
 }
 } catch (PDOException $pe){
     print($pe->getMessage());
      $result["code"] = false;
      $result["message"] = "error in process";
 }
 
 print(json_encode($result));

?>