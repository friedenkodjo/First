<?php 
@mysql_connect("localhost","root", "") or die('Connexion impossible').mysql_error();
@mysql_select_db('crud') or die('Bd indisponible').mysql_error();
 ?>