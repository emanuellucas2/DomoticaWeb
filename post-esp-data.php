<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Domotica";

/*$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);*/

$api_key_value = "tPmAT5Ab3j7F9";

$api_key= $eletro = $Usuario_id = $potAtiva = $potAparente = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $eletro = test_input($_POST["eletro"]);
        $Usuario_id = test_input($_POST["Usuario_id"]);
        $potAtiva = test_input($_POST["potAtiva"]);
        $potAparente = test_input($_POST["potAparente"]);
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO Amostra (eletro, Usuario_id, potAtiva, potAparente)
        VALUES ('" . $eletro . "', '" . $Usuario_id . "', '" . $potAtiva . "', '" . $potAparente . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}