<?php
$host = getenv('IP');
$username = 'Info2180';
$password = '1234';
$dbname = 'world';
if($_SERVER['REQUEST_METHOD'] === 'GET' ){
  if(isset($_GET['country']) or !empty($_GET['country'])){
    $country = $_GET['country'];
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<tr>";
    echo "<th>Country Name</th>";
    echo "<th>Continent</th>";
    echo "<th>Independence Year</th>";
    echo "<th>Head of State</th>";
    echo "</tr>";
    foreach($results as $row) {
      $countryName = $row['name'];
      $continent = $row['continent'];
      $independenceYear = $row['independence_year'];
      $headOfState = $row['head_of_state'];
    
    }
    echo "</table>";

    echo "<table>";
    echo "</tr>";
    echo "<th>Country Name</th>";
    echo "<th>Continent</th>";
    echo "<th>Independence Year</th>";
    echo "<th>Head of State</th>";
    echo "</tr>";
      echo "<tr>";
      echo "<td>$cityName </td>";
      echo "<td>$District</td>";
      echo "<td>$Population</td>";
      echo "</tr>";
	foreach($results as $row) {
      $cityName = $row['name'];
      $district = $row['district'];
      $population = $row['population'];
      $headOfState = $row['head_of_state'];
     
    }
    echo "</table>";
  }
}

