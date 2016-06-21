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
		$req="select * from articles"; 	 	
		$res= mysql_query($req);

	 ?>


	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	      <a class="navbar-brand" href="#">Frieden KODJO</a>
	      <ul class="nav navbar-nav navbar-left">
	        <li class="active"><a href="#">About</a></li>
	        <li><a href="#">Contact me</a></li>
	      </ul>
	    
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">My Secret</a></li>
	      </ul>

	  </div><!-- /.container-fluid -->
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1>Hello, world!</h1>
 			<p>...</p>
  			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>

		</div>

 
	</div>
<div style="padding:5px;">
	<?php 

			while($ligne=mysql_fetch_array($res)){



				echo "<h1>$ligne[1]</h1>".$ligne[2];


				echo "<a href= \"details.php?id=$ligne[0]\"> Supprimer</a> | ";
				echo "<a href= \"modifier.php?id=$ligne[0]\">Modifier</a>";

			}
	 ?>




</div>


   <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        OK
                    </button>

<!-- 	<div class="row" id="mainContainer">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1> In a row class div and a col-lg/md/sm-12 class div ( Too long but useful in nested div case)</h1>


		</div>
	</div> -->
	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
						<h1>good morning</h1>

                </div>
                <div class="modal-footer">

           

                    <button type="button" class="btn btn-primary" >Save changes</button>
                </div>
            </div>
        </div>
    </div>
  
	
	
	<script src ="js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src ="js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src ="js/bootstrap.min.js" type="text/javascript"></script>

	  <script type="text/javascript">

       window.onload =function() {
        if($.cookie('me') != null && $.cookie('me') != "")
        {
            $("div#myModal.modal, .modal-backdrop").hide();
        }
        else
        {
            $('#myModal').modal('show');
            $.cookie('me', 'str');
        }
    };

	</script>


</body>
</html>