<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php include("includes/examheader.php");
$e=new Exam();
$q= new Question();
$eid=$_GET['eid'];
$std_id=$_SESSION['student_id'];
$m= new Result();

if(isset($_POST['submit']))
{ 
 $question_id=array_keys($_POST);
 $result=0;
 $count=0;
 $h=new History();
 $h->stu_id =$std_id;
 $h->exam_id=$eid;
if ($data=$q->readByexamId($eid)) 
{              
foreach ($data as $key => $value) 
{
  foreach ($value as $k => $v) {$row[$k]=$v;}

  $w=$q->correct($question_id[$count]);

      if ($w[0]['answer']==$_POST[$question_id[$count]]) 
      { 
           $result++;
      }
      
      $h->q_id=$question_id[$count]; 
      $h->answer= $_POST[$question_id[$count]]; 
      if ($m->check($std_id,$eid))
		  {
			$h->updatehis($std_id,$eid, $h->q_id);
	    }
		 else
		{
			$h->create(); 
		} 
    $count++;

}

    $m->stu_id =$std_id;
    $m->exam_id=$eid;
    $m->mark   =$result;
     if ($m->check($std_id,$eid))
     {
     	 $m->updatere($std_id,$eid); 
     }
     else
     {
     	$m->create();
     }
 }  
    echo " <script type='text/javascript'>// show modal 
	 $(document).ready(function(){ $('#myModal').show(); });
    </script> ";

} 




?>
<link rel="stylesheet" type="text/css" href="exampage.css">
<?php $ex=$e->readById($eid);
?>
<body>
<h1><p style="text-align: center;margin-top: 40px"><?php echo $ex[0]['name']; ?></p></h1>
<div class="row"> <!-- row start -->
	<div class='col-lg-12 col-md-5 col-sm-11 col-xs-11'>
		<div class="container">
<form action="" style="width: 1200px" method="post">
<div class="form-wrapper" style="" > <!-- Card Start -->
	
	<?php
     if ($data=$q->readByexamId($eid)){
                          $i=1;
           

           shuffle($data);          
          foreach ($data as $key => $value) {
          foreach ($value as $k => $v) {$row[$k]=$v;}


	echo "
	<h3>Q$i:{$row['question_text']}?</h3>
	";
		if($row['q_img'])
		{
			 echo "<img src='Admin/img/questionimg/{$row['q_img']}' width='400' height='300' alt='No img'><br>";
		}
	echo "
		<span class='choicet'>
			<input type='radio'  name='{$row['q_id']}' value='option1' required/>
		
				A.{$row['option1']}
			
		</span>

		<br>

		<span class='choicet'>
			<input type='radio'  name='{$row['q_id']}' value='option2' required/>
			
				B.{$row['option2']}
		</span>

		<br>";

		if ($row['option3'])
		{
			echo "
		<span class='choicet'>
			<input type='radio'  name='{$row['q_id']}' value='option3' required/>
	        C.{$row['option3']}
		</span>

		<br>


		<span class='choicet'>
			<input type='radio'  name='{$row['q_id']}' value='option4'required />
              D.{$row['option4']}
			</span>";
		}
		echo "<hr>";
			$i++;
			}
		}

			?>

</div> <!-- Card End -->
			<div>
		<button type="submit" class="btn  btn-rounded  btncls" name="submit">Finish</button> 
		</div>
</form>
	
     </div>
     </div>
 </div> <!-- row end -->

<div class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  
id="myModal"><!-- model start -->
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Exam Result </h3>
         
        </div>
        
        <!-- Modal body -->
        
          <?php if ($result<5)
           {
              echo "<div class='modal-body alert alert-danger  text-center h2 '> Mark = $result";
              echo " <br>Study Well Next Time </div>";
          }
          else
          {
               echo "<div class=' modal-body alert alert-success text-center h2 '> Mark = $result";
               echo "<br>Excellent You Have Successed </div>";
          } 
          ?>
        
        
        <!-- Modal footer -->
        <div class="modal-footer h3 ">
          <a href="index.php" class="btn btn-danger" data-dismiss="modal">Back To Home </a>
           <?php echo "<a href='result.php?result=$result&eid=$eid' class='btn btn-primary' data-dismiss='modal'>More Info </a>";?>
        </div>
        
      </div>
    </div>
  </div> <!-- model end -->
  
</div> 








