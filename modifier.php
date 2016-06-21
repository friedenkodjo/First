<html>
<head>
	<title>Good morning Crud</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ID=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Hello It's Frieden</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    
</head>
<body>
	<?php 
		include("lib/connexion.php");
		$idA=$_GET['id'];
		$req="select * from articles where id=$idA"; 	 	
		$res= mysql_query($req);

	 ?>
 
	</div>
<div style="padding:5px;">
	<?php 

		while($ligne=mysql_fetch_array($res)){
			?>

			<form  action="modifier.php" method="POST">
				<label>Titre</label>
				<input type="text" value="<?php echo($ligne[1]); ?>" name="titre"/>
				<label>Contenu</label>
				<textarea name="contenu"> <?php echo($ligne[2]);?></textarea>
				<input type="submit" value="Modifier" name="btModif"/>

			</form>

			<?php
			}
	 		?>




</div>



	<script src ="js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src ="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>