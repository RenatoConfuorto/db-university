<?php
require_once 'server.php';

$sql = 'SELECT * FROM `departments`;';

$result = $conn->query($sql);

if($result && $result->num_rows > 0){
  var_dump($result);
}elseif($result){
  echo '0 risultati';
}else{
  echo 'Errore';
}