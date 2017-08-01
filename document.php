<?php
class document
{
private $reference;
private $nom;
private	$date_creation;
private $prix;
private $auteur;
private $stock;

function get_nom()
{
return $this->nom;	
}
function get_reference()
{
return $this->reference;	
}
function get_date()
{
return $this->date_creation;	
}
function get_stock()
{
return $this->stock;	
}
function get_prix()
{
return $this->prix;	
}
function get_auteur()
{
return $this->auteur;	
}
function __construct ($reference,$nom,$date_creation,$prix,$auteur,$stock)
{
	$this->reference=$reference;
	$this->nom=$nom;
	$this->date_creation=$date_creation;
	$this->prix=$prix;
	$this->auteur=$auteur;
	$this->stock=$stock;
}

}?> 

