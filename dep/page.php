<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  require_once 'server.php';
  require_once 'department.php';

  $id = $_GET['id'];

  $sql = "SELECT `id`, `name`, `address`, `phone`, `email` FROM `departments` WHERE `id`=" . $id . ';';

  $result = $conn->query($sql);

  if($result && $result->num_rows > 0){
    // var_dump($result);
    $row = $result->fetch_assoc();
    // var_dump($row);
   
  }elseif($result){
    echo '0 risultati';
  }else{
    echo 'Errore';
  }
  ?>

  <h1><?php echo $row['name']; ?></h1>
  <h3><?php echo $row['address']; ?></h3>

  <p>Numero di telefono: <?php echo $row['phone']; ?></p>
  <p>Email: <?php echo $row['email']; ?></p>
</body>
</html>