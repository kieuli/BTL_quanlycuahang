<?php

	session_start();
	include "../config/Config.php";
	include "../config/Model.php";
	include "../config/Controller.php";
	include "../config/RemoveUnicode.php";
	include "../config/Token.php";

	if(isset($_GET["act"]) && $_GET["act"]=="logout")
		unset($_SESSION["account"]);
// kiểm tra đã tồn tại hay chưa
	if(isset($_SESSION['account'])) {
		$controller = isset($_GET["controller"])?"controllers/".$_GET["controller"]."Controller.php":"controllers/home.php";
		include "../layout/admin.php";
	}
	else {
		include "../index.php";
	}

?>