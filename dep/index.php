<?php
require_once 'server.php';
require_once 'department.php';

$sql = 'SELECT `id`, `name` FROM `departments`;';
// $sql = 'SELECT `id`, `name`, `address`, `phone` FROM `departments`;';

$result = $conn->query($sql);
$departments = [];

if($result && $result->num_rows > 0){
  // var_dump($result);
  while($row = $result->fetch_assoc()){
    $departments[] = $row;
  }
  // var_dump($departments);
}elseif($result){
  echo '0 risultati';
}else{
  echo 'Errore';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Dipartimenti</h1>
  <ul>
    <?php foreach($departments as $department){ ?>
    <li>
      <h2><?php echo $department['name'] ?></h2>
      <a href="<?php echo 'page.php?id=' . $department['id'] ?>">Vedi info</a>
    </li>
    <?php } ?>
  </ul>
  
</body>
</html>