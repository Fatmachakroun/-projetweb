<?php
include "config.php";
class ajouter
{
	public $conn;
	function __construct ()
	{$c=new config();
	$this->conn=$c->cnx;
	}
	
	
	function ajouterDocument($doc,$conn)
	{
        $req="INSERT INTO document(reference,nom,date_creation,prix,auteur,stock) 
        VALUES (".$doc->get_reference().",'".$doc->get_nom().
        "','".$doc->get_date()."',".
        $doc->get_prix().",'".$doc->get_auteur()."',"
        .$doc->get_stock().")";
       echo $req;
        $conn->query($req);
}
//*************************************************//
function afficheDocuments($conn) 
    {
		$req="SELECT * FROM document";
		$liste=$conn->query($req);
		//var_dump($liste);
		return $liste->fetchAll();	
		
	}
	function modifierDocument($doc,$conn)
	{
		$req="UPDATE document SET nom='".$doc->getNom()."',date_creation='".$doc->getDateCreation()."',prix=".$doc->getPrix().",auteur='".$doc->getAuteur()."',stock=".$doc->getStock()." 
		where reference=".$doc->getReference();
		//echo $req;
		$liste=$conn->query($req);
	}

}
	
?>
