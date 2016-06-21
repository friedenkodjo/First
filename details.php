

	<?php 
		include('lib/connexion.php');
		$requete="delete from Articles where id=\"$_GET[id]\"";
		$resultat= @mysql_query($requete);

	 ?>
	