<?php 

require('DBconnection.php');

class Student extends dbconnection{

	public $stu_id;
	public $email;
	public $full_name;
	public $password;
	public $mobile;
	public $edu_level;
	public $image;
	



	public function create(){
		$query = "INSERT INTO student(email,full_name,password,mobile,edu_level,image)
				 VALUES('$this->email','$this->full_name','$this->password','$this->mobile','$this->edu_level',
				 '$this->image')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM student";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM student WHERE stu_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE student SET email     = '$this->email',
									 full_name = '$this->full_name',
									 password  = '$this->password',
									 mobile    = '$this->mobile',
									 edu_level = '$this->edu_level',
									 image     = '$this->image'
						    WHERE stu_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM student WHERE stu_id = $id";
		$this->performQuery($query);
	}

}
