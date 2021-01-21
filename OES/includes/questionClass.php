<?php 


class Question extends Exam{

	public $q_id;
	public $exam_id;
	public $question_text;
	public $option1;
	public $option2;
	public $option3;
	public $option4;
	public $answer;
	



	public function create(){
		$query = "INSERT INTO questions(exam_id,question_text,option1,option2,option3,option4,answer)
				 VALUES('$this->exam_id','$this->question_text',
				 '$this->option1','$this->option2','$this->option3','$this->option4','$this->answer')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM questions";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readAllexam(){
		$query  = "SELECT * FROM exam";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM questions WHERE q_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

	public function readByexamId($id){
		$query  = "SELECT * FROM questions WHERE exam_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		
		$query = "UPDATE questions SET exam_id     = '$this->exam_id',
									 question_text = '$this->question_text',
									 option1  = '$this->option1',
									 option2    = '$this->option2',
									 option3 = '$this->option3',
									 option4     = '$this->option1',
									 answer     = '$this->answer'
						    WHERE q_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM questions WHERE q_id = $id";
		$this->performQuery($query);
	}
	public function correct($id){
		$query  = "SELECT answer FROM questions 
		           WHERE q_id = $id ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
		
	}

public function resultByexamId($id,$sid){
		$query  = "SELECT * FROM history,questions WHERE history.q_id=questions.q_id AND history.exam_id=$id AND stu_id=$sid";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}


	

}
