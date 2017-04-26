<?php
	class UsersController {
		public function index() {
			if (!isset($_POST["add"]) && !isset($_POST["delete"]) && !isset($_POST["edit"])) {
				$users = Users::all();
				require_once("views/users/index.php");
			} else {
				if (isset($_POST["add"])) {
					if (!isset($_POST["empNum"]) && !isset($_POST["empFn"]) && !isset($_POST["empMn"]) && !isset($_POST["empLn"]) && !isset($_POST["dept"]) && !isset($_POST["code"]) && !isset($_POST["desc"])) {

				 		$users = Users::add($_POST["empNum"], $_POST["empFn"], $_POST["empMn"], $_POST["empLn"], $_POST["dept"], $_POST["code"], $_POST["desc"]);

						$users = Users::all();
						require_once("views/users/index.php");
					} else {
						$users = Users::all();
						require_once("views/users/index.php");	
					}
				} else if (isset($_POST["delete"])) {
					$users = Users::delete($_POST["delete"]);

					$users = Users::all();
					require_once("views/users/index.php");
				} else if (isset($_POST["edit"])) {
					$users = Users::edit($_POST["edit"], $_POST["empNum"], $_POST["empFn"], $_POST["empMn"], $_POST["empLn"], $_POST["dept"], $_POST["code"], $_POST["desc"]);

					$users = Users::all();
					require_once("views/users/index.php");
				} else {
					$users = Users::all();
					require_once("views/users/index.php");
				}
			}
		}

		public function show() {
			if (!isset($_GET["id"])) {
				return call("pages", "error");
			}

			$users = Users::find($_GET["id"]);
			require_once("views/users/show.php");
		}

		public function add() {
			require_once("views/users/add.php");
		}

		public function edit() {
			if (!isset($_POST["edit"])) {
				return call("pages", "error");
			}

			$users = Users::find($_POST["edit"]);
			require_once("views/users/edit.php");
		}
	}
?>