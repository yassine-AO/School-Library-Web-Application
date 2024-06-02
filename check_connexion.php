<?php
$id =$_POST['id__adherent'];
$password = $_POST['mot__de_passe_adherent'];
$condition=$password;


session_start();

    $_SESSION['data'] = $id;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliotheque1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM adherent WHERE mot_de_passe_adherent = '$condition' and id_adherent= '$id' " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: tableau_de_bord_adh.php");
}

 else {
    
   echo '<h1 align="center">
   Votre mot de passe ou votre ID est incorrect :(
  </h1>';

}

$conn->close();


?>
