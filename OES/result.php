<?php include("includes/home_header.php");
$result=$_GET['result'];
$eid=$_GET['eid'];
$q= new Question();
$hi=new History();
$std_id=$_SESSION['student_id'];
 if ($data=$hi->readhis($std_id,$eid))
{
       $i=0;
        $answer=[];               
        foreach ($data as $key => $value) {
        foreach ($value as $k => $v) {$row[$k]=$v;}
        $answer[$i]=$row['answer'];
        $i++;
    }
    


}
?>
<link rel="stylesheet" type="text/css" href="exampage.css">
	<h1><p style="text-align: center;margin-top: 40px" class="form-wrapper"> Your Mark
	<br><?php echo $result ."/10"; ?>
</h1>
<div class="row"> <!-- row start -->

	<div class='col-lg-12 col-md-5 col-sm-11 col-xs-11'>
		<div class="container">
<form action="" style="width: 1200px" method="post">
<div class="form-wrapper" style="" > <!-- Card Start -->
	<?php
     if ($data=$q->readByexamId($eid)){
                          $i=1;
                          $c=0;
                         
          foreach ($data as $key => $value) {
          foreach ($value as $k => $v) {$row[$k]=$v;}


	echo "
	<h3>Q$i:{$row['question_text']}?</h3>
	";
		if($row['q_img'])
		{
			 echo "<img src='Admin/img/questionimg/{$row['q_img']}' width='600' height='300' alt='No img'><br>";
		}
	  echo "<span class='choicet'>";
		
				if($row['answer']=="option1" )
				{
					echo "<span style='color:green'>A.{$row['option1']} {Correct}</span>";
				}
				
			      elseif($answer[$c]=="option1") 
			      {
			      	
			        	echo "<span style='color:red'>A.{$row['option1']} {your answer}</span>";
			      }
			      
			       else
			        {echo "A.{$row['option1']}";}
                    
	            
	             echo "<br>";
		         echo "<span class='choicet'>";
				if($row['answer']=="option2" )
				{
					echo "<span style='color:green'>B.{$row['option2']} {Correct}</span>";
				}
				
			      elseif($answer[$c]=="option2") 
			      {
			      	
			        	echo "<span style='color:red'>B.{$row['option2']} {your answer}</span>";
			      }
			       else
			        {echo "B.{$row['option2']}";}
			      	

				
		echo "<br>";
		if ($row['option3'])
		{
              if($row['answer']=="option3" )
				{
					echo "<span style='color:green'>C.{$row['option3']} {Correct}</span>";
				}
				
			      elseif($answer[$c]=="option3") 
			      {
			      	
			        	echo "<span style='color:red'>C.{$row['option3']} {your answer}</span>";
			      }
			       else
			        {echo "C.{$row['option3']}";}
			
		echo "<br>";
                if($row['answer']=="option4" )
				{
					echo "<span style='color:green'>D.{$row['option4']} {Correct}</span>";
				}
				
			      elseif($answer[$c]=="option4") 
			      {
			      	
			        	echo "<span style='color:red'>D.{$row['option4']} {your answer}</span>";
			      }
			       else
			        {echo "D.{$row['option4']}";}
				
			
		}
		echo "<hr>";
			$i++;
			$c++;
			}
		}

			?>

</div> <!-- Card End -->
</form>
	
     </div>
     </div>
 </div> <!-- row end -->
  
</div> 