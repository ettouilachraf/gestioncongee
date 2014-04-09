<?php
function date_fr_us($dt)
{
 $j = substr($dt,0,2);
 $m = substr($dt,3,2);
 $a = substr($dt,6,4);
 return $a."/".$m."/".$j;
}
?>
<?php


$date_debutCP =$_POST["date_Debut"]  ;
$date_finCP =$_POST["date_Fin"]  ;

function NbJours($date_debutCP, $date_finCP)
{
  $tDeb = explode("/", $date_debutCP);
  $tFin = explode("/", $date_finCP);

  $diff = mktime(0, 0, 0, $tFin[1], $tFin[0], $tFin[2]) -
          mktime(0, 0, 0, $tDeb[1], $tDeb[0], $tDeb[2]);

  return(($diff / 86400)+1);

}


  $tDeb = explode("/", $date_debutCP);
  $tFin = explode("/", $date_finCP);

  $timestampEnd = mktime(0, 0, 0, $tFin[1], $tFin[0], $tFin[2]);
  $timestampStart = mktime(0, 0, 0, $tDeb[1], $tDeb[0], $tDeb[2]);


// SERVANT AU CALCUL DES JOURS OUVRABLES
// Fonction retournant le nombre de jour fériés samedis et
// dimanches entre 2 dates entrées en timestamp

function jour_ferie($timestampStart, $timestampEnd)
{
    // Initialisation de la date de début
    $jour = date("d", $timestampStart);
    $mois = date("m", $timestampStart);
    $annee = date("Y", $timestampStart);
    $nbFerie = 0;
    $nbFerie2 = 0;
    while ($timestampStart <= $timestampEnd)
    {
			// Calul des samedis et dimanches
			$jour_julien = unixtojd($timestampStart);
			$jour_semaine = jddayofweek($jour_julien, 0);
			if($jour_semaine == 0 || $jour_semaine == 6)
			{
			$nbFerie++;//Samedi (6) et dimanche (0)
			}

				/*CECI A ETE RAJOUTE PAR MES SOINS*/

			if($jour_semaine == 1||$jour_semaine == 2||$jour_semaine == 3||$jour_semaine == 4||$jour_semaine == 5)
			{
         // Définition des dates fériées fixes
        if($jour == 01 && $mois == 01) $nbFerie2++; // 1er janvier
        if($jour == 11 && $mois == 01) $nbFerie2++; // 11 janvier
        if($jour == 01 && $mois == 05) $nbFerie2++; // 1 mai
        if($jour == 30 && $mois == 07) $nbFerie2++; // 30 juillet
        if($jour == 14 && $mois == 08) $nbFerie2++; // 14 aout
		if($jour == 20 && $mois == 08) $nbFerie2++; // 20 aout
        if($jour == 21 && $mois == 08) $nbFerie2++; // 21 aout
        if($jour == 06 && $mois == 11) $nbFerie2++; // 6 novembre
        if($jour == 18 && $mois == 11) $nbFerie2++; // 18 novembre

         // Calcul du jour de l hegire
         $date_hegire = easter_date($annee);
         $jour_hegire = date("d", $date_hegire);
         $mois_hegire = date("m", $date_hegire);
         if($jour_hegire == $jour && $mois_hegire == $mois) $nbFerie2++;
         // hegire

         // Calcul du jour de naissproft (81 jours après hegire)
         $date_naissproft = mktime(date("H", $date_hegire),
         date("i", $date_hegire),
         date("s", $date_hegire),
         date("m", $date_hegire),
         date("d", $date_hegire) + 81,
         date("Y", $date_hegire)
         );
         $jour_naissproft = date("d", $date_naissproft);
         $mois_naissproft = date("m", $date_naissproft);
         if($jour_naissproft == $jour && $mois_naissproft == $mois) $nbFerie2++;
         //naissproft

         // Calcul de aid al fitr (278 jours après hegire)
        $date_fitr = mktime(date("H", $date_naissproft),
         date("i", $date_naissproft),
         date("s", $date_naissproft),
         date("m", $date_naissproft),
         date("d", $date_naissproft) + 278,
         date("Y", $date_naissproft)
         );
         $jour_fitr = date("d", $date_fitr);
         $mois_fitr = date("m", $date_fitr);
         if($jour_fitr == $jour && $mois_fitr == $mois) $nbFerie2++;
         //aid al fitr
			
		 // Calcul de aid al adha (346 jours après hegire)
		 $date_adha = mktime(date("H", $date_fitr),
         date("i", $date_fitr),
         date("s", $date_fitr),
         date("m", $date_fitr),
         date("d", $date_fitr) + 346,
         date("Y", $date_fitr)
         );
         $jour_adha = date("d", $date_adha);
         $mois_adha = date("m", $date_adha);
         if($jour_adha == $jour && $mois_adha == $mois) $nbFerie2++;
         //aid al adha
			}
			$jour++;
			$timestampStart=mktime(0,0,0,$mois,$jour,$annee);
			$nbJour = ($timestampEnd - $timestampStart / (60*60*24));
         // Incrémentation du nombre de jour ( on avance dans la boucle)
    }
     return $nbFerie+$nbFerie2;
    }//Fin de la fonction

$a=NbJours($date_debutCP, $date_finCP);
$b=jour_ferie($timestampStart, $timestampEnd);
$testcp = round( $a - $b , 0);
?>
<html>
<head>
<title>Ajouter</title>
<link href="../default.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
	<h1><a href="#"><i><marquee>Gestion des conges</marquee></i></a></h1>
</div>
<div id="left">
	<div id="menu" class="boxed">
		<h2 class="heading">Pages</h2>
		<ul>
			<li class="first"><a href="../accueil_drh.php" title="">Accueil</a></li>
			<li><a href="../demande.php" title="">Demande</a></li>
			<li><a href="../ressource.php" title="">Ressource</a></li>
			<li><a href="../joursferie.php" title="">jours ferie</a></li>
		</ul>
	</div>
</div>
<!-- end #left -->
<div id="right"> 
	<div class="boxed">
		<h1 class="heading">operations</h1>
		<ul>
			<li> <a href="../ajouter_demande.php">Ajouter demande</a></li>
			<li><a href="../recherch_demande.php">Modifier demande</a></li>
			<li><a href="../Supprimer_demande.php">Supprimer demande </a></li>
			<li><a href="../list_demande.php"> liste  demande </a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading">Gestion den demande </h1>
<?php
include("../connect.php");
if (!empty($_POST["Enregistrer"]))
{
    if ( (empty($_POST["date_Debut"])) || (empty($_POST["date_Fin"])) || (empty($_POST["jour"])) )
		
    {
      echo "<H4>Certains champs sont restés vides,<br>Veuillez remplir tous les champs !";
      echo "<br><br><br><br>";
	  echo "<H4><a href='Javascript:history.go(-1)'>Retour à la page ajouter une demande</a><br>";
    }
    else
    {
	$rdtd=date_fr_us($_POST['date_Debut']);
	$rdtf=date_fr_us($_POST['date_Fin']);
      $query="insert into demand_conge(date_debut,date_fin,nb_jour_Conge,etat_demand,id_type,Id_ressource) values ('$rdtd', '$rdtf','$testcp','1','".$_POST["code"]."','".$_POST["test"]."')";
  
	  $result=mysql_query($query);
      if ($result)
	  {
        echo "<H4>demande conge ajouté avec succés !";
		echo "<H4><a href='../ajouter_demande.php'> ajouter une demande </a>";
		}
      else
      {
	  die ('lerreur est '.mysql_error());
        echo "<H4>Erreur lors de l'ajout du demande !";
      	echo "<br><br><br><br>";
      	echo "<H4><a href='../ajouter_demande.php'>Ajouter une nouv demande</a><br>";
    	}
    }
	
}
  ?>

	</div>
</div>
<!-- end #center -->
<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p id="legal"></p>
	<p id="links"></p>
</div>
</body>

</html>

