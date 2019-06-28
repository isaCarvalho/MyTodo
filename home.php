<?php
	session_start();
	if (!isset($_SESSION['login']))
	{
		header('Location: index.php');
	}

	include "header.html";
?>
	<head>
		<title>1.MyTodo - Home</title>
	</head>

	<body onload="atualizar()">
		<div class="tabela"> 
		
			<table class="feito" id="feito"></table>

		</div>
	</body>

	<script src="js/atualizar.js"></script>

<?php
	include "footer.html";
?>


