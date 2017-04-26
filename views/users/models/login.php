<?php
	class Login {
		public $un;
		public $pw;

		public function __construct($un, $pw) {
			$this->username = $un;
			$this->password = $pw;
		}

		public function getLogin($un, $pw) {
			// $db = DB::getInstance();
			// $req = $db->prepare("select * from users where username = :un and password :pw");
			// $req->execute(array("un" => $un, "pw" => $pw));
			// $post = $req->fetch();

			// return new Post($post["ID"], $post["username"], $post["passowrd"]);
			$this->username = $un;
			$this->password = $pw;

			$_SESSION["un"] = $this->username;
			$_SESSION["pw"] = $this->password;

			return new Login($this->username, $this->password);

			// if (isset($_POST["username"]) && isset($_POST["password"])) {
				
			// } else {
			// 	return 'INVALID USER!';
			// }
		}
		
	}
?>