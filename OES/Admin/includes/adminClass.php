<?php 

require('DBconnection.php');

class Admin extends dbconnection{

	public $admin_id;
	public $admin_email;
	public $password;
	public $admin_name;
	



	public function create(){
		$query = "INSERT INTO admin(admin_email,password,admin_name)
				 VALUES('$this->admin_email','$this->password','$this->admin_name')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE admin SET admin_email      = '$this->admin_email',
								   password 		= '$this->password',
								   admin_name       = '$this->admin_name'
								   WHERE admin_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM admin WHERE admin_id = $id";
		$this->performQuery($query);
	}
	public function login($email,$pass){
		$query  = "SELECT * FROM admin 
		           WHERE admin_email = '$email' AND
					     password 	 = '$pass' ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function st_count(){
		$query  = "SELECT COUNT(stu_id) AS 'count' FROM student";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function topcat(){
		$query  = "SELECT category.cat_name,COUNT(exam.cat_id) AS 'num' FROM exam,category WHERE category.cat_id=exam.cat_id GROUP BY category.cat_id ORDER BY exam.cat_id DESC LIMIT 3";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function topexam(){
		$query  = "SELECT exam.name,COUNT(result.exam_id) AS 'num' FROM result,exam WHERE result.exam_id=exam.exam_id GROUP BY result.exam_id ORDER BY(num) DESC LIMIT 2";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function PassandFail($id){
		$query  = "SELECT result.exam_id,exam.name,result.mark FROM result,exam WHERE result.exam_id=exam.exam_id AND result.exam_id=$id";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readAllexam(){
		$query  = "SELECT * FROM exam";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	
}
