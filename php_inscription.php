<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="bibliotheque1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	echo 'heyyy';
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $id_adherent = $_POST['id_adherent'];
	 $mot_de_passe_adherent = $_POST['mot_de_passe_adherent'];
	 $type_adherent = $_POST['type_adherent'];
	 $nom_adherent = $_POST['nom_adherent'];
	 $prenom_adherent = $_POST['prenom_adherent'];
     $adresse_adherent = $_POST['adresse_adherent'];
     $nombre_emprunts = $_POST['nombre_emprunts'];
     $points = $_POST['points'];
     $permission_emprunts = $_POST['permission_emprunts'];

	 $sql_query = "INSERT INTO adherent (id_adherent,mot_de_passe_adherent,type_adherent,nom_adherent,prenom_adherent,adresse_adherent,nombre_emprunts,points,permission_emprunts)
	 VALUES ('$id_adherent','$mot_de_passe_adherent','$type_adherent','$nom_adherent','$prenom_adherent','$adresse_adherent','$nombre_emprunts','$points','$permission_emprunts')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header("Location: inscription_succes.html");
     exit;
	 }
	 else
     {
		echo "Error" . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>