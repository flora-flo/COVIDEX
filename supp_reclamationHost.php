<?php
 
 include_once "../../Controller/reclamationC.php";
 include_once "../../Model/reclamation.php";
$reclamationC=new reclamationC();

if(isset($_POST['supprimer'])){
   
   $reclamationC->supprimerReclamation($_POST['id']);
   header('location: consulterRecHost.php');
 } 
 ?>
