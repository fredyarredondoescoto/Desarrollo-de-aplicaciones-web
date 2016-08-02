<?php 
include_once "control/usuarios.php";
try{
	$clsUsuarios=new usuarios();
	$userActual = new UserVO();
	if(isset($_POST['txtnid']) && isset($_POST['txtnusr']) && isset($_POST['txtnpwd'])){
		$userActual->setUsername($_POST['txtnusr']);
		$userActual->setPassword($_POST['txtnpwd']);
		$userActual->setId($_POST['txtnid']);
		$regAfectados=$clsUsuarios->save($userActual);
		if($regAfectados > 0) {
			echo $regAfectados." Registros Actualizados";
		}
		else{
			echo "0 Registros Actualizados";
		}
	}
}
catch(Exception $exc){
	
}