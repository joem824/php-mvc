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
			$this->empFn = $empFn;
			$this->empMn = $empMn;
			$this->empLn = $empLn;
			$this->dept = $deptName;
			$this->code = $jobCode;
			$this->desc = $jobDesc;
		}

		public static function all() {
			$list = [];
			$db = DB::getInstance();
			$req = $db->query("select * from tbl_employees order by emp_num");

			foreach ($req->fetchAll() as $users) {
				$list[] = new Users($users["ID"], $users["emp_num"], $users["emp_first_name"], $users["emp_middle_name"], $users["emp_last_name"],
									$users["department_name"], $users["job_code"], $users["job_description"]);
			}

			return $list;
		}

		public static function find($id) {
			$db = DB::getInstance();
			$id = intval($id);
			$req = $db->prepare("select * from tbl_employees where id = :id");
			$req->execute(array("id" => $id));
			$users = $req->fetch();

			return new Users($users["ID"], $users["emp_num"], $users["emp_first_name"], $users["emp_middle_name"], $users["emp_last_name"], $users["department_name"], $users["job_code"], $users["job_description"]);
		}

		public static function add($empNum, $empFn, $empMn, $empLn, $deptName, $jobCode, $jobDesc) {

			$db = DB::getInstance();
			$req = $db->prepare("insert into tbl_employees (emp_num, emp_first_name, emp_middle_name, emp_last_name, department_name, job_code, job_description) values (':empNum', ':empFn', ':empMn', ':empLn', ':deptName', ':jobCode', ':jobDesc');");
			
			$req->execute(array("empNum" => $empNum,
								"empFn" => $empFn,
								"empMn" => $empMn,
								"empLn" => $empLn,
								"deptName" => $deptName,
								"jobCode" => $jobCode,
								"jobDesc" => $jobDesc));
		}

		public static function delete($id) {
			$db = DB::getInstance();
			$req = $db->prepare("delete from tbl_employees where id = :id ");
			$req->execute(array("id" => $id));
		}

		public static function edit($id, $empNum, $empFn, $empMn, $empLn, $deptName, $jobCode, $jobDesc) {
			$db = DB::getInstance();
			$req = $db->prepare("update tbl_employees set emp_num = :empNum, emp_first_name = :empFn, emp_middle_name = :empMn, emp_last_name = :empLn, department_name = :deptName, job_code = :jobCode, job_description = :jobDesc where ID = :id ");

			try {
				$req->execute(array("id" => $id,
								"empNum" => $empNum,
								"empFn" => $empFn,
								"empMn" => $empMn,
								"empLn" => $empLn,
								"deptName" => $deptName,
								"jobCode" => $jobCode,
								"jobDesc" => $jobDesc));
			} catch (Exception $ex) {
				echo $ex->getMessage();
			}
		}
	}
?>