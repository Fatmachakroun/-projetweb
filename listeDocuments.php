<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include "crud.php";
include "document.php";
$crudDoc=new ajouter();
$conn=$crudDoc->cnx;//public
$liste=$crudDoc->afficheDocuments($conn);
	?> 
<h1>Liste des documents</h1>
	
	<table border="1">
	<tr>
	<td>reference</td><td>nom</td><td>date_creation</td><td>prix</td><td>auteur</td><td>stock</td><td></td><td></td><td></td>
	</tr>
	<?php
	foreach ($liste as $l){
    ?>
	<tr>
	<td><?php echo $l['reference'] ?></td>
	<td><?php echo $l['nom'] ?></td>
	<td><?php echo $l['date_creation'] ?></td>
	<td><?php echo $l['prix'] ?></td>
	<td><?php echo $l['auteur'] ?></td>
	<td><?php echo $l['stock'] ?></td>
	<td>
	<form method="POST" action="modifierDocument.php">
	<input type="submit" value="modifier" name="modif">
	<input type="hidden" value=<?php echo $l['reference'] ?> name="ref">
	</form>
	</td>
	<td>
	<form method="POST" action="modifierDocument.php">
	<input type="submit" value="supprimer" name="delete">
	<input type="hidden" value=<?php echo $l['reference'] ?> name="ref">
	</form>
	</td>
	<td><a href="details.php?nom=<?php echo $l['nom'] ?>&prix=<?php echo $l['prix'] ?>">Afficher</a></td>
	
	</tr>
	<?php
	}
	?>
	</table>