<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Densenvolvimento Web,criação de site,criar site,ter um site,site,agência de site">
	<meta name="description" content="A Float Devs é uma empresa voltada ao Densenvolvimento Web, nossa missão é apresentar você ao mundo.">
	<title>Projeto Agência</title>
</head>
<body>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url){
			case 'sobre':
				echo '<target target="sobre" />';
				break;
			
			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	?>


	<header>
		<div class="center">
			<div class="logo left">Float Devs</div><!--Logo-->
			<nav class="Desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="Mobile right">
				<div class="botao-menu-mobile">
					<i class="fa-solid fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		</div>
		<div class="clear"></div>
	</header>

	<?php
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');	
		}else{
			if($url != 'sobre' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"';?>>
		<div class="center">
			<p>Todos os direitos reservados.</p>
		</div><!--center-->
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>
	
</html>
