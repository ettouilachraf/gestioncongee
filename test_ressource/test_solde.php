<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des conges</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
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
			<li> <a href="../ajouter_ressource.php">Ajouter Ressource</a></li>
			<li><a href="../recherch_modifier.php">Modifier Ressource</a></li>
			<li><a href="../Supprimer_ressource.php">Supprimer Ressource </a></li>
			<li><a href="../Initialise_solde.php">Initialiser solde de conge </a></li>
			<li><a href="../list_ressource.php">list ressource </a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading">Gestion des Ressources </h1>
		<?php include("../connect.php"); 
				$jour = date('d');
				$mois = date('m');
				$annee = date('Y');
				$aujorduit=$annee.'-'.$mois.'-'.$jour;
			if ($jour=='31' && $mois=='05')
			{
				$sql = " SELECT Date_embauch,Id_ressource FROM ressource";
				$res = mysql_query($sql)  or die("Requete pas comprise");
 			 	while($row=mysql_fetch_array($res))
				{  	$d_e=$row['0'];
					$id=$row['1'];
					// l'intérvale entre deux dates 
					$debut = new DateTime($d_e); 
					$fin = new DateTime($aujorduit);
					$interval = $debut->diff($fin);
					$an= $interval->format('%y');
					$newsolde=0;
					
					$re="select solde from ressource where Date_embauch='".$d_e."'and Id_ressource='".$id."'";
						$Solde = mysql_query($re)  or die("Requete pas comprise");
						while($row=mysql_fetch_array($Solde)) 
						{  	
							$So=$row['0'];
						} 
					if ($an>=0 && $an<5 )
					{	$newsolde=$So+18;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";                                              
      					$result=mysql_query($query);
						$So=0;
					}
					elseif($an>=5 && $an<10 )
					{ 	$newsolde=$So+19.5;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
					elseif($an>=10 && $an<15)
					{ 	$newsolde=$So+21;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
					if($an>=15 && $an<20)
					{	$newsolde=$So+22.5;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
					if($an>=20 && $an<25)
					{	$newsolde=$So+24;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
					if($an>=25 && $an<30)
					{	$newsolde=$So+25.5;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
					if($an>=30 && $an<35)
					{	$newsolde=$So+27;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."' and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
					if($an>=35 && $an<40)
					{	$newsolde=$So+28.5;
						$query="update ressource set Solde=$newsolde where date_embauch='".$d_e."'and Id_ressource='".$id."'";
      					$result=mysql_query($query);
						$So=0;
					}
                                                                      
				}  
				echo "l'operation <strong>initialiser solde </strong>est effectué avec succès";   ?>
				<br /><a href="../ressource.php"><h2>Retoure à Ressource</h2></a>
				<?php
				
			}
			else 
			{
				echo " la date d'initialisation de solde est : 31/05 pour chaque année " ;
			
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
</body>
</html>
