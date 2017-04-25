<?php
	function call($controller, $action) {
		require_once("controllers/" . $controller . "_controller.php");

		switch($controller) {
			case "pages":
				if ($action == "login") {
					require_once("models/login.php");
				}
				$controller = new PagesController();
				break;
			case "users":
				require_once("models/users.php");
				$controller = new UsersController();
			default:
				break;
		}

		$controller->{$action}();
	}

	$controllers = array("pages" => ["home", "error", "login"],
						"users" => ["index", "show"],
						"login" => ["login"]);

	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call("pages", "error");
		}
	} else {
		call("pages", "error");
	}
?>