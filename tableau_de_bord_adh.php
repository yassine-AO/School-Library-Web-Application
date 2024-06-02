<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>TABLEAU DE BORD</title>

    <link rel="stylesheet" href="tab.css">

</head>
<body >
  <br>
  <br>
<h1 style="text-decoration: underline;";" align="center">
TABLEAU DE BORD
    </h1>

<br>
<br>
<br>

      <?php

      session_start();
      $cle_id = $_SESSION['data'];
      
      
      
      $servername="localhost";
			$username = "root";
			$password = "";
			$database = "bibliotheque1";

			$connection = new mysqli($servername, $username, $password, $database);

			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM adherent where id_adherent = '$cle_id' ";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
            }
            $row = $result->fetch_assoc();
            echo "<table>
            <tr>
              <th>Votre ID</th>
              <td>" .$row["id_adherent"]."</td>
            </tr>
            <tr>
              <th>Type</th>
              <td>". $row["type_adherent"] ."</td>
            </tr>
            <tr>
              <th>Votre nom</th>
              <td>". $row["nom_adherent"] ."</td>
            </tr>
            <tr>
              <th>Votre Prénom</th>
              <td>". $row["prenom_adherent"] ."</td>
            </tr>
            <tr>
              <th>Votre adresse</th>
              <td>". $row["adresse_adherent"] ."</td>
            </tr>
            <tr>
              <th>Votre  nombre maximal d'emprunts</th>
              <td>". $row["nombre_emprunts"] ."</td>
            </tr>
            <tr>
              <th>Votre points</th>
              <td>". $row["points"] ."</td>
            </tr>
            <tr>
              <th>Permission d'emprunts</th>
              <td>". $row["permission_emprunts"] ."</td>
            </tr>
            <tr>
              <th>Votre anciennes regularisations</th>
              <td>". $row["anciennes_regularisations"] ."</td>
            </tr>
          </table>";

            $connection->close();

            
    



            ?>
            <button class="LOGOUT"><a href="home.html">Se Déconnecter</a></button>
</body>
</html>