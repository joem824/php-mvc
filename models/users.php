<?php
	class Users {
		public $id;
		public $empNum;
		public $empFn;
		public $empMn;
		public $empLn;
		public $deptName;
		public $jobCode;
		public $jobDesc;

		public function __construct($id, $empNum, $empFn, $empMn, $empLn, $deptName, $jobCode, $jobDesc) {
			$this->id = $id;
			$this->num = $empNum;
			$this->name = $empFn . " " . $empMn . " " . $empLn;
			$this->dept = $deptName;
			$this->code = $jobCode;
			$this->desc = $jobDesc;
		}

		public static function all() {
			$list = [];
			$db = DB::getInstance();
			$req = $db->query("select * from tbl_employees order by emp_num");

			foreach ($req->fetchAll() as $post) {
				$list[] = new Users($post["ID"], $post["emp_num"], $post["emp_first_name"], $post["emp_middle_name"], $post["emp_last_name"],
									$post["department_name"], $post["job_code"], $post["job_description"]);
			}

			return $list;
		}

		public static function find($id) {
			$db = DB::getInstance();
			$id = intval($id);
			$req = $db->prepare("select * from tbl_employees where id = :id");
			$req->execute(array("id" => $id));
			$post = $req->fetch();

			return new Users($post["ID"], $post["emp_num"], $post["emp_first_name"], $post["emp_middle_name"], $post["emp_last_name"], $post["department_name"], $post["job_code"], $post["job_description"]);
		}
	}
?>