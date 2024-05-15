<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php include_once("conexao.php");
$idPro = $_GET['idPro'];
$result_produto = "SELECT * FROM produto WHERE idproduto='$idPro'";
$resultado_produto = mysqli_query($conn, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $row_produto['nomePro']; ?></title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="stylesheet" type="text/css" href="css/slick.css">
      <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	  <link rel="stylesheet" type="text/css" href="css/lity.css">
	  <link rel="icon" type="image/png" sizes="32x32" href="img/icon/logovinhi.png">
	</head>
	<body>
	<?php require_once("topo.php"); ?>


	<div class="jquery-script-clear"></div>

</div>

		<section class="detalhe">

			
			</div>
	<div id="zoom"></div>
<div id="wrapper">
		
		<div id="content">
			<div id="view">
			  <img src="https://picsum.photos/1200/800/?random" alt="" width="500" />
			
			
			</div>
			
		
			
		  
			
	</div>
	<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_produto['descPro']; ?></h1>
				<p>código <?php echo $row_produto['idproduto']; ?></p>
				<h2>R$ <?php echo $row_produto['valorPro']; ?></h2> <!--pegar info do banco de dados -->	
				<a href="encomenda.php" class="btn btn-primary" role="button">Encomendar</a>
			</div>
</div>
	
			
		</div>
		</section>
		<div id="thumbs">
				<div id="nav-left-thumbs"></div>
				<div id="pics-thumbs">
				<tr><td><img src="<?php echo $row_produto['fotoPro']; ?>" alt="" name="imagem1" width="70" height="70"></tr></td>
						<tr><td><img src="<?php echo $row_produto['fotoPro']; ?>" alt="" name="imagem1" width="70" height="70"></td></tr>
						<tr><td><img src="<?php echo $row_produto['fotoPro']; ?>" alt="" name="imagem1" width="70" height="70"></td></tr>
									
				</div>
				<!-- <div id="nav-right-thumbs">></div>
			</div> -->
		</div>
		
		<section class="galeriainsta">
      <div id="instafeed" class="instafeed"></div>
      </section>
	  <?php require_once("rodape.php"); ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/zoom-slideshow.js"></script>
	<script src="js/instafeed.js"></script>
	<script type="text/javascript"src="js/animacao.js"></script>

<script>
$(document).ready(function() {
    // Initialisation du plugin jQuery
    $('#view').setZoomPicture({
	thumbsContainer: '#pics-thumbs',
	prevContainer: '#nav-left-thumbs',
	nextContainer: '#nav-right-thumbs',
	zoomContainer: '#zoom',
	zoomLevel: 2,
    }); 
});
</script>

	</body>
</html>