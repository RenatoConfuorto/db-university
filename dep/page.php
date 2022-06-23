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
  /*
  $id = $_GET['id'];
  $sql = "SELECT `id`, `name`, `address`, `phone`, `email` FROM `departments` WHERE `id`=$id";
  $result = $conn->query($sql);
  */

  $stm = $conn->prepare('SELECT `id`, `name`, `address`, `phone`, `email` FROM `departments` WHERE `id`=?');
  $stm->bind_param('d', $id);
  $id = $_GET['id'];

  $stm->execute();
  $result = $stm->get_result();

  if($result && $result->num_rows > 0){
    // var_dump($result);
    $current_dep = $result->fetch_assoc();
    $department = new Department($current_dep['name'], $current_dep['address'], $current_dep['phone'], $current_dep['email']);
    // var_dump($row);
   
  }elseif($result){
    echo 'Nessun risultato';
  }else{
    echo 'Errore';
  }
  ?>

  <h1><?php echo $department->name; ?></h1>
  <h3><?php echo $department->address; ?></h3>

  <p>Numero di telefono: <?php echo $department->phone; ?></p>
  <p>Email: <?php echo $department->email; ?></p>
</body>
</html>