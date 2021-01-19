<?php 


class History extends Result {

    public $his_id;
	public $stu_id;
	public $exam_id;
	public $q_id;
	public $answer;

	public function create(){
		$query = "INSERT INTO history(stu_id,exam_id,q_id,answer)
				 VALUES('$this->stu_id','$this->exam_id','$this->q_id','$this->answer')";
		return $this->performQuery($query);
	}
	public function readhis($sid,$eid){
		$query  = "SELECT * FROM history WHERE stu_id=$sid AND exam_id=$eid";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function updatehis($id,$eid,$qid){
		$query = "UPDATE history SET   answer     = '$this->answer'
						        WHERE stu_id = $id AND  exam_id=$eid AND  q_id=$qid";

		return $this->performQuery($query);
	}

	
}
