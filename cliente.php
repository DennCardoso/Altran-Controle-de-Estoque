<! DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Altran - PHP teste 1">
    	<meta name="author" content="Dennis Cardoso">
    	<link rel="icon" href="http://www.altran.com.br/fileadmin/templates/main/img/altran/favicon.ico">
		<title> Estoque - Cliente </title> 
	
		<!-- Bootstrap core CSS -->
    	<link href="bootstrap_files/bootstrap.css" rel="stylesheet">

    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="bootstrap_files/starter-template.css" rel="stylesheet">

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   		<link href="Starter%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

   		<!-- Custom styles for this template -->
        <link href="Starter%20Template%20for%20Bootstrap_files/starter-template.css" rel="stylesheet">


	</head>
	<body>
	<!-- We code here -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Controle de Estoque - Altran</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pedido.php">Pedido</a></li>
            <li><a href="produto.php">Produto</a></li>
            <li class="active"><a href="cliente.php">Cliente</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class="starter-template">
		<div class="container">			
			<form action="cliente_incluir.php" method="post">
			  <div class="form-group">
			    <label for="inputClientName">Nome</label>
			    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
			  </div>
			  <div class="form-group">
			    <label for="inputClientEmail">E-mail</label>
			    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label>
			      <label for="inputClientTelefone">Telefone</label>
			      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
			    </label>
			  </div>
			  <button type="submit" class="btn btn-default">Incluir</button>
			</form>
		 </div>
	</div>

	<!-- Jquery script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>	

	<!-- JavaScript Files should be linked at the botton of the page -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap_files/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap_files/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

	</body>
</html>