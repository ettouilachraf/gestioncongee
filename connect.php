<?php
  	$base = mysql_connect ('localhost', 'root','')  or die ("Echec de la connexion au serveur !");  
	mysql_select_db ('gestion_conge', $base) ;  
?>