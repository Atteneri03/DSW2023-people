<?php


require "../vendor/autoload.php";
require "../src/utils/connection.php";
use Atteneri\People\Models\Person;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Gentes</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
      </tr>
    </thead>
<?php
foreach (Person::all() as $person) {
  
?>
    <tbody>
      <tr>
        <td><?=$person->id?></td>
        <td><?=$person->name?></td>
      </tr>

 <?php
 }
 ?>     
    </tbody>
  </table>
</body>
</html>
