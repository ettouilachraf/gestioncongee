<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des conges</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<h1><a href="#"><i><marquee>Gestion des conges</marquee></i></a></h1>
</div>
<div id="left">
	<div id="menu" class="boxed">
		<h2 class="heading">Pages</h2>
		<h2>Gestion de conges</h2><p> est une petite application qui permets la 
					manipulation de differente opperation sur le controle de gestion de conge demander par les fonctionnaires.<br/>
	</div>
</div>
<!-- end #left -->
	<div id="right" class="boxed">
			<h1 class="heading"></h1>
					
			</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading">Bienvenue dans notre application </h1>
		<p>pour acceder a l'application il faut entre les informations suivant :
			<?php 
//conexion � la base donn�
$local="localhost";
$user="root";
$mdp="";
$bd="gestion_conge";
$con=mysqli_connect($local,$user,$mdp,$bd) or die("Erreur de conexion");
?>
<!--formulaire-->
<form method="POST" action="accueil_general.php">
<table align="center">
<tr><td><label><h3>Login</h3> <input type="text" name="logincl" /></label></td></tr>
<tr><td><label><h3>Mot de pass</h3><input type="password" name="mdpcl" /></label></td></tr>
<tr><td><label><center><input type="submit" name="sub1" value="Envoyer" /></center></label></td></tr>
</table>
</form>

<?php
//code PHP 
	if(isset($_POST["sub1"]) && $_POST["sub1"]!="")
	{
    $logincl=$_POST['logincl'];
    $mdpcl=$_POST['mdpcl'];
    $req="select * from utilisateur where login='$logincl' and mot_passe='$mdpcl'";
    $rep=mysqli_query($con,$req);
    if(mysqli_num_rows($rep)!=0) 
    { 
	?>
  <script>
   alert("OK");
   <?PHP
   header('Location:accueil_drh.php'); 
   ?>
    </script>
	
   
      <?php
	 //header('Location:accueil_drh.php'); 
	}
    else
    {  ?>
<script>
   alert(" Mot de passe ou login incorrect");
</script>	
  <?php 
    }
	}
	?>
		</p>
	</div>
</div>
<!-- end #center -->
<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p id="legal"></p>
	<p id="links"></a></p>
</div>
</body>
</html>
