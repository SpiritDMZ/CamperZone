<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['p']) && isset($_GET['f']))
{
	$idcargo = $_GET['p'];
	$nombrecargonuevo = $_GET['f'];
	$user_ses = $_SESSION['User'];
		
	$dbm = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->execute();
	

	$num_rows = $dbm->rowCount();
	
	if($num_rows < 0)
	{
		echo '1';
		return 0;
	}
	else if($num_rows > 0)
	{
		while($row = $dbm->fetch())
		{
			if($row['Rango'] == 8)
			{
				$faccj = $row['Faccion'];

				if($idcargo == 0)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango1` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 1)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango2` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 2)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango3` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 3)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango4` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 4)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango5` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 5)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango6` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 6)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango7` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				if($idcargo == 7)
				{
					$sql = $con->prepare("UPDATE `facciones` SET `Rango8` = :nombrerango WHERE `id` = :banda");
					$sql->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
					$sql->bindParam(':banda', $faccj, PDO::PARAM_INT);
					$sql->execute();
					
				}
				
				
				$sql_2 = $con->prepare("INSERT INTO `action_queue` (`faccj`, `user_ses`, `jugname`, `queue_params`, `status`, `Fecha`, `type`) VALUES (:facc, :idcargo, :nombrerango, :user, '0', NOW(), '6')");
				$sql_2->bindParam(':facc', $faccj, PDO::PARAM_INT);
				$sql_2->bindParam(':idcargo', $idcargo, PDO::PARAM_INT);
				$sql_2->bindParam(':nombrerango', $nombrecargonuevo, PDO::PARAM_STR);
				$sql_2->bindParam(':user', $user_ses, PDO::PARAM_STR);
				$sql_2->execute();
				
				
				echo '3';
				return 0;
			}
			else 
			{
				echo '2';
				return 0;
			}
		}
	}
}
else 
{
	echo "<script>window.location='index.php';</script>";
}
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>