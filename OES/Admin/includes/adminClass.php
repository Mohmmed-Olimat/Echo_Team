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


}
