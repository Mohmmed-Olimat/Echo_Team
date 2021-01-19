<?php 

require('DBconnection.php');

class Question extends dbconnection{

	public $q_id;
	public $exam_id;
	public $question_text;
	public $option1;
	public $option2;
	public $option3;
	public $option4;
	public $answer;
	public $q_img;
	



	public function create(){
		$query = "INSERT INTO questions(exam_id,question_text,option1,option2,option3,option4,answer, q_img)
				 VALUES('$this->exam_id','$this->question_text',
				 '$this->option1','$this->option2','$this->option3','$this->option4','$this->answer' , '$this->q_img' )";
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
	public function update($id){
		
		$query = "UPDATE questions SET exam_id     = '$this->exam_id',
									 question_text = '$this->question_text',
									 option1  = '$this->option1',
									 option2    = '$this->option2',
									 option3 = '$this->option3',
									 option4     = '$this->option4',
									 answer     = '$this->answer'
						    WHERE q_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM questions WHERE q_id = $id";
		$this->performQuery($query);
	}

}
