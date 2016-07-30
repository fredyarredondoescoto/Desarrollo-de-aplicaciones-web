<?php 
include_once "control/usuarios.php";
$clsUsuarios = new usuarios();

if(isset($_POST['txtusr']) && isset($_POST['txtpwd'])){
	$currUserVO= $clsUsuarios->getByUserPass($_POST['txtusr'],$_POST['txtpwd']);
	if(sizeof($currUserVO) > 0) {
		foreach ($currUserVO as $UserVO) {
    		echo "1";
		}
    }
	else{
			echo "0";
	}
}


