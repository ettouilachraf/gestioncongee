
<!--formulaire-->
<form method="POST" action="index.php">
<table align="center">
<tr><td><label><center><h2><u>Se conecter</u></h2></center></label></td></tr>
<tr><td><label><h3>Login</h3> <input type="text" name="logincl" /></label></td></tr>
<tr><td><label><h3>Mot de pass</h3><input type="password" name="mdpcl" /></label></td></tr>
<tr><td><label><center><input type="submit" name="sub1" value="Envoyer" /></center></label></td></tr>
</table>
</form>

<?php
//code PHP 
include ("../connect.php");
	if(isset($_POST["sub1"]) && $_POST["sub1"]!="")
	{
    $logincl=$_POST['logincl'];
    $mdpcl=$_POST['mdpcl'];
    $req="select * from etulisateur where login='$logincl' and mot_passe='$mdpcl'";
    $rep=mysqli_query($con,$req);
    if(mysqli_num_rows($rep)!=0)
    { ?>
	<script>
   alert("OK");
    </script> 
      <?php
	 //header('Location:index.php'); 
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
	
