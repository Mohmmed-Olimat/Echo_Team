<?php 


class Result extends Question{

	public $result_id;
	public $stu_id;
	public $exam_id;
	public $mark;
	public $date;
	public $answer;
	
	public function create(){
		$query = "INSERT INTO result(stu_id,exam_id,mark)
				 VALUES('$this->stu_id','$this->exam_id','$this->mark')";
		return $this->performQuery($query);
	}

	public function read($sid){
		$query  = "SELECT * FROM result WHERE stu_id=$sid ";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function updatere($id , $eid){
		$query = "UPDATE result SET   mark     = '$this->mark'
						        WHERE stu_id   = $id AND exam_id=$eid";
		return $this->performQuery($query);
	}
	public function check($sid , $eid){
		$query  = "SELECT * FROM result WHERE stu_id=$sid AND exam_id=$eid ";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	
}
