<?php
	class UsersController {
		public function index() {
			$users = Users::all();
			require_once("views/users/index.php");
		}

		public function show() {
			if (!isset($_GET["id"])) {
				return call("pages", "error");
			}

			$users = Users::find($_GET["id"]);
			require_once("views/users/show.php");
		}
	}
?>