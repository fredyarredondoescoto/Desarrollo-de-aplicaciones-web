<?php
include_once "control/usuarios.php";
    $clsUsuarios = new usuarios();

if(isset($_POST['ID'])){
	$currUserVO= $clsUsuarios->getByUserId($_POST['ID']);
	if(sizeof($currUserVO) > 0) {
		foreach ($currUserVO as $UserVO) {
    		echo $UserVO->getUsername();            
		}
    }
}
    
