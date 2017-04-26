<?php
	class PagesController {

		public function login() {
			if (!isset($_POST["username"]) && !isset($_POST["password"])) {
				return call("pages", "error");
			}

			$login = Login::getLogin($_POST["username"], $_POST["password"]);
			require_once("views/pages/home.php");
		}

		public function home() {
			require_once("views/pages/home.php");
		}

		public function error() {
			require_once("views/pages/error.php");
		}
	}
?>