<?php
echo "<h1>Hello World from PHP7-FPM</h1>";
echo 'Version PHP courante : ' . phpversion();
echo 'Mon nom d\'utilisateur est ' .$_ENV["USER"] . '!';


echo '<pre>';
try{
  $conn = new \PDO('mysql:host=mariadb-service', 'root', 'roottoor');
  $sth = $conn->prepare('SHOW DATABASES');
  $sth->execute();
  $checks = $sth->fetchAll(PDO::FETCH_ASSOC);
  foreach ($checks as $check) {

  print_r($check);
  }
}
catch(\Exception $e){
    print_r($e);
}
echo '</pre>';

?>
