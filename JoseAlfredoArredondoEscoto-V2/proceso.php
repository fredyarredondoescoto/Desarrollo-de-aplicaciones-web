<?php
if(isset($_POST['txtusr']) && isset($_POST['txtpwd']))
	if($_POST['txtusr']=="Alfredo" && $_POST['txtpwd']=="AkatsukiItachi.1991")
	{
		echo "bienvenido";
	}
	else{
		echo "usuario incorrecto";
	}