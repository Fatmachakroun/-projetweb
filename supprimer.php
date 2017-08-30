
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
	
include "crud.php";
$res=affichage();
?>

<h1>Liste des documents</h1>
	
	<table border="1">
	<tr>
	<td>reference</td><td>nom</td><td>date_creation</td><td>prix</td><td>auteur</td><td>stock</td><td></td><td></td><td></td>
	</tr>
	<?php
	foreach ($res as $l){
    ?>
	<tr>
	<td><?php echo $l[0] ?></td>
	<td><?php echo $l[1] ?></td>
	<td><?php echo $l[2] ?></td>
	<td><?php echo $l[3] ?></td>
	<td><?php echo $l[4] ?></td>
	<td><?php echo $l[5] ?></td>
	<td>
	<form method="POST" action="modifierDocument.php">
	<input type="submit" value="modifier" name="modif">
	<input type="hidden" value=<?php echo $l['reference'] ?> name="ref">
	</form>
	</td>
	<td>
	<form method="POST" action="supprimer.php">
	<input type="submit" value="supprimer" name="delete">
	<input type="hidden" value=<?php echo $l['reference'] ?> name="ref">
	</form>
	</td>
	
	
	</tr>
	<?php
	}
	?>
	</table>

	
	</body>
	</html>
	
