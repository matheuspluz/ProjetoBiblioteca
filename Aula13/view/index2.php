<?php
	//echo $_SERVER['PHP_SELF'];
        echo "Autor excluido com sucesso!<br><br>";
        echo '<a class="nav-link" href="index.php">Voltar</a>';
		sleep(3);
		//header("location: index.php");
	header( "Refresh:5; url=index.php");