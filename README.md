## School Library Web Application ✨💻📚

### Description⭐

This project is a comprehensive web application designed to manage a school library's operations. It is built using HTML, CSS, PHP, and JavaScript, with MySQL as the database. The application allows users to manage books, handle user registrations, track book loans, and generate various reports. The system ensures that library staff can efficiently handle inventory, track user activities, and maintain records of book transactions.

### Features⭐

- **User Management**: Allows registration and management of library members, including students and staff.
- **Book Management**: Facilitates adding, updating, and tracking books in the library.
- **Loan Management**: Manages the borrowing and returning of books, including due dates and overdue penalties.
- **Reservation System**: Enables users to reserve books that are currently checked out.
- **Reporting**: Generates reports on book usage, member activity, and inventory status.
- **User Roles**: Differentiates between user roles such as administrators, agents, and members with specific permissions.

### Database Connection⭐

The connection to the MySQL database is established using PHP. Below is an example of how the connection is made in the `config.php` file:

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

```

This code initializes the connection to the MySQL database using the server name, username, password, and database name. If the connection fails, an error message is displayed.

### MLD: Model Logic Description⭐

### Tables

- **Documents**: Stores details about each document.
    - `code_doc`: Primary Key
    - `localisation`: Location in the library
    - `titre`: Title of the document
    - `auteur`: Author of the document
    - `annee_sortie`: Year of publication
    - `type`: Type of document (e.g., book, article)
    - `genre`: Genre of the document
    - `nombre_emprunts_effectues`: Number of times borrowed
    - `possibilite_emprunt`: Borrowing availability
- **Revendeur**: Information about resellers.
    - `ID_revendeur`: Primary Key
    - `nom_revendeur`: Name of the reseller
    - `telephone`: Contact number
    - `adresse`: Address
- **Agent**: Library staff members.
    - `ID_agent`: Primary Key
    - `nom_agent`: Last name
    - `prenom_agent`: First name
    - `mot_de_passe_agent`: Password
- **Commande**: Orders placed for new documents.
    - `ID_commande`: Primary Key
    - `qte`: Quantity
    - `montant_total`: Total amount
- **Doc_commande**: Documents included in each order.
    - `code_doc_commande`: Primary Key
    - `titre`: Title of the document
    - `type_doc`: Type of document
- **Fiche_prob_emprunt**: Records of borrowing issues.
    - `ID_fiche_prob`: Primary Key
    - `ID_agent`: Foreign Key (Agent)
    - `ID_adherent`: Foreign Key (Adherent)
- **Fiche_emprunt**: Records of book loans.
    - `ID_fiche_emprunt`: Primary Key
    - `nom_emprunteur`: Borrower's name
    - `date_limite_restitution`: Return date
    - `duree_de_pret`: Loan duration
    - `date_debut_pret`: Start date
    - `code_doc`: Foreign Key (Document)
    - `date_retour_doc`: Return date
    - `ID_agent`: Foreign Key (Agent)
    - `ID_adherent`: Foreign Key (Adherent)
- **Adherent**: Library members' information.
    - `ID_adherent`: Primary Key
    - `nom_adherent`: Last name
    - `prenom_adherent`: First name
    - `type_adherent`: Member type (e.g., student, professor)
    - `adresse_adherent`: Address
    - `mot_de_passe_adherent`: Password
    - `nombre_emprunts`: Number of borrowings
    - `points`: Points earned
    - `permission_emprunt`: Borrowing permissions
    - `anciennes_regularisations`: Previous regularizations
- **Fiche_regularisation**: Records of regularization actions.
    - `ID_fiche_reg`: Primary Key
    - `motif`: Reason for regularization
    - `ID_agent`: Foreign Key (Agent)
    - `ID_adherent`: Foreign Key (Adherent)
- **Fiche_reservation**: Book reservation details.
    - `ID_reservation`: Primary Key
    - `doc_a_reserver`: Document to reserve
    - `date_reservation`: Reservation date
    - `ID_adherent`: Foreign Key (Adherent)
- **Famille_doc**: Document family information.
    - `code_famille`: Primary Key
    - `type_doc`: Type of document
    - `nombre_doc`: Number of documents
- **Fournisseur**: Details about suppliers.
    - `num_fournisseur`: Primary Key
    - `raison_sociale`: Company name
    - `statut_signature_contrat`: Contract status
    - `code_doc`: Foreign Key (Document)
    - `ID_revendeur`: Foreign Key (Reseller)
- **Fiche_inscription**: Member registration details.
    - `ID_fiche_inscription`: Primary Key
    - `duree_emprunt`: Borrowing duration
    - `nom_adherent`: Last name
    - `prenom_adherent`: First name
    - `adresse_adherent`: Address
    - `montant_adhesion`: Membership fee
    - `nombre_doc_a_emprunter`: Number of documents allowed for borrowing
    - `ID_agent`: Foreign Key (Agent)
    - `ID_adherent`: Foreign Key (Adherent)
- **Chef_etablissement**: Head of the establishment details.
    - `nom_chef`: Primary Key
    - `prenom_chef`: First name
    - `ID_adherent`: Foreign Key (Adherent)
    - `ID_fiche_reg`: Foreign Key (Regularization)
- **Modification_doc**: Tracks changes to documents.
    - `code_doc`: Foreign Key (Document)
    - `ID_agent`: Foreign Key (Agent)
    - `type_modif_doc`: Type of modification
- **Passage_commande**: Relationship between agents and their orders.
    - `ID_agent`: Foreign Key (Agent)
    - `ID_commande`: Foreign Key (Order)
- **Modification_adherent**: Tracks changes to member information.
    - `ID_agent`: Foreign Key (Agent)
    - `ID_adherent`: Foreign Key (Adherent)
    - `type_modif_adherent`: Type of modification

### License🧾

This project is licensed under the MIT License.
