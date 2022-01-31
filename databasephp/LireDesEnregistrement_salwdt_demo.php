<?php 
  //Inclusion du fichier contenant la connexion à la base 
  include_once('connection-alwdt_demo.php'); 
  //La requête SQL 
  $sql = "SELECT * FROM `la_tbale_choisie` LIMIT 0 , 30"; 
  //Recherche des données 
  $sth = $dbh->query($sql); 
  // On voudrait les résultats sous la forme d’un tableau associatif 
  $result = $sth->fetchAll(PDO::FETCH_ASSOC); 
 //Affichage des résultats 
  foreach ($result as $row){ 
      echo $row['nom'];echo '-'; 
      echo $row['prenom'];echo '-'; 
      echo $row['email'];echo '<br/>'; 
  } 
  $dbh=NULL; 
?> 