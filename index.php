<?php
echo "<h1>Hello World from PHP7-FPM</h1>";
echo 'Version PHP courante : ' . phpversion();
$hostname_perso = getenv ( string $varname , bool $local_only = true) : string|false;
echo 'Mon hostname est ' .$hostname_perso '!';


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
