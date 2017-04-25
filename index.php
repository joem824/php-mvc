<?php
  require_once("connection.php");

  if(isset($_GET["controller"]) && isset($_GET["action"])) {
  	$controller = $_GET["controller"];
  	$action = $_GET["action"];

  	require_once("views/layout.php");
  } else if (isset($_POST["username"]) && isset($_POST["password"])) {
  	$controller = "pages";
  	$action = "login";

  	require_once("views/layout.php");
  } else {
  	$controller = "pages";
  	$action = "login";

  	require_once("login.php");
  }
?>