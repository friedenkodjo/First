	


--


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ID=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Hello It's Frieden</title>
	<script src ="js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src ="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

	<script type="text/javascript">
            $(window).load(function(){
                $('#myModal').modal('show');
            });
    </script>
</head>
<body>


	<?php 
		include('lib/connexion.php');
		$requete='select * from Articles';
		$resultat= @mysql_query($requete);

	 ?>


	


	<div class="container">
		<h1> Welcome  </h1>
		<?php 
			while($ligne=@mysql_fetch_array($resultat)){
				echo '<h3>'.substr($ligne[1],0,50).'</h3>'.substr($ligne[2],0, 50);
		?>
		<a href="details.php?num=<?php echo($ligne[0]);?>">Lire la suite</a>	
			<?php } ?>

	</div>

	
		<!-- Button trigger modal -->
<!--     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Launch demo modal
    </button> -->
 
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                TEXTE DE MA MODAL
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
    </div>
	



</body>
</html>