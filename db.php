<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд

// Встановлення з'єднання 
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br />";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["id"]."<br>";
        echo "Name: " . $row["first_name"]."<br>";
        echo "Surname: " . $row["last_name"]."<br>";
        echo "Login: " . $row["login"]."<br>";
        echo "Password: " . $row["password"]."<br>";
	}
}
?>