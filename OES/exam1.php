<?php include("includes/home_header.php");

$q= new Question();
$eid=$_GET['eid'];

if(isset($_POST['submit'])){

	echo "Kids";
}

?>
<link rel="stylesheet" type="text/css" href="exampage.css">
<body>
<h1><p style="text-align: center;margin-top: 40px">Exam name</p></h1>
<div class="row"> <!-- row start -->
	<div class='col-lg-12 col-md-5 col-sm-11 col-xs-11'>
		<div class="container">
<form action="" style="width: 1200px" method="post">
<div class="form-wrapper" style="" > <!-- Card Start -->
	
	<?php
     if ($data=$q->readByexamId($eid)){
                          $i=1;
                         
          foreach ($data as $key => $value) {
          foreach ($value as $k => $v) {$row[$k]=$v;}

	echo "
	<h3>Q$i:{$row['question_text']}?</h3>
	";
		if($row['q_img'])
		{
			 echo "<img src='Admin/img/questionimg/{$row['q_img']}' width='600' height='300' alt='No img'><br>";
		}
	echo "
		<span class='choicet'>
			<input type='radio'  name='choice$i' value='' />
		
				A.{$row['option1']}
			
		</span>

		<br>

		<span class='choicet'>
			<input type='radio'  name='choice$i' value='' />
			
				B.{$row['option2']}
		</span>

		<br>";

		if ($row['option3'])
		{
			echo "
		<span class='choicet'>
			<input type='radio'  name='choice$i' value='' />
	        C.{$row['option3']}
		</span>

		<br>


		<span class='choicet'>
			<input type='radio'  name='choice$i' value='' />
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
	
<div id="confirm">
         <div class="message">8/10 </div><br>
      <a href="result.php">   <button class="yes">More detail</button></a>
      </div>
     </div>
     </div>
 </div> <!-- row end -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         function functionAlert(msg, myYes) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.show();
         }
      </script>



