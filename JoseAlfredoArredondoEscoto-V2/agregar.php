<?php 
include_once "control/usuarios.php";
try{
	$clsUsuarios=new usuarios();
	$userActual = new UserVO();
	if(isset($_POST['txtnusr']) && isset($_POST['txtnpwd'])){
		$userActual->setUsername($_POST['txtnusr']);
		$userActual->setPassword($_POST['txtnpwd']);
		$userActual->setId(0);
		$regAfectados=$clsUsuarios->save($userActual);
		if($regAfectados > 0) {
			echo $regAfectados." Registros Insertados";
		}
		else{
			echo "0 Registros Insertados";
		}
	}
}
catch(Exception $exc){
	
}

