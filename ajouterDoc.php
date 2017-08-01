<?PHP
include "crud.php";
include "document.php";
$crudDoc = new ajouter();
$connexion=$crudDoc->conn;//public
$doc = new document($_POST['reference'],$_POST['nom'],$_POST['date_creation'],$_POST['prix'],$_POST['auteur'],$_POST['stock']);
$crudDoc->ajouterDocument($doc,$connexion);
header("Location:ajoutdocument.html");


?>
