<?php 



class Exam extends Category{

	public $exam_id;
	public $name;
	public $cat_id;
	
	



	public function create(){
		$query = "INSERT INTO exam(name,cat_id)
				 VALUES('$this->name','$this->cat_id')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM exam";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readAllcategory(){
		$query  = "SELECT * FROM category";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readById($id){
		$query  = "SELECT * FROM exam WHERE exam_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function readBycatId($id){
		$query  = "SELECT * FROM exam WHERE cat_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE exam SET name      = '$this->name',
								   	  cat_id 		= '$this->cat_id'
								   
								   WHERE exam_id     = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM exam WHERE exam_id = $id";
		$this->performQuery($query);
	}

}
