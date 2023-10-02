<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "softproject"; 
$conn = new mysqli($servername,$username, $password, $dbname); 
$sql = "SELECT voted, COUNT(*) FROM voter GROUP BY voted"; 
$result1 = $conn->query($sql); 
while($row = mysqli_fetch_array($result1)) { 
 echo "NO.OF VOTES FOR". " " .$row['voted']. " = ". $row['COUNT(*)']; 
xxxv
 echo "<br />"; 
} 
$sql = "SELECT voted, COUNT(*) FROM voter LIMIT 1"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)) { 
 echo "WINNER OF THE ELLECTION IS"." ".$row['voted']; 
 echo "<br />"; 
} 
$conn->close(); 
?>
