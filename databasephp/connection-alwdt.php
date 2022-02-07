<?php 
    $user = 'yyyyyyyyyyyyy'; 
 $pass = 'xxxxxxxxxx'; 
    // Data Source Name  
 $dsn = 'mysql:host=mysql-grimej.alwaysdata.net;dbname=grimej_votemymusic_v2'; 
    try{ //tentative de connexion : on crée un objet de la classe PDO 
        $dbh= new PDO($dsn, $user, $pass); 
        //S'il y a des erreurs de connexion, un objet PDOException est 
    // lancé. Vous pouvez attraper cette exception si vous voulez 
    // gérer cette erreur  
    } catch (PDOException $e){ 
        print "Erreur ! :" . $e->getMessage() . "<br/>"; 
        die(); 
    } 
?>
CREATE DATABASE PlaylistCollaboratif;

CREATE TABLE utilisateurs (
user_id serial PRIMARY KEY NOT NULL AUTO_INCREMENT,
votes int NOT NULL,
identifiant varchar(20) NOT NULL,
SuperVote int,
role_invite varchar(10) NOT NULL,
role_organisateur varchar(10) NOT NULL
);

CREATE TABLE playlist (
musique_id musique PRIMARY KEY NOT NULL AUTO_INCREMENT,
votes int NOT NULL,
duree minute NOT NULL,
style_musique varchar(15) NOT NULL,
titre varchar(20) NOT NULL
);

CREATE TABLE artist (
nom_id nom PRIMARY KEY NOT NULL
);

CREATE TABLE album (
id_album album PRIMARY KEY NOT NULL,
FOREIGN KEY(id_album) REFERENCES artist(nom_id)
);