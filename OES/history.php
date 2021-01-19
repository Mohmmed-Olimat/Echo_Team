<?php include("includes/home_header.php");?>



<div class="container" style="margin-bottom: 15px">
<h1><p style="text-align: center;margin-top: 15px">History</p></h1>
<hr>
<div class="row ">
        <?php 
 $std_id=$_SESSION['student_id'];
$re=new Result();
 if ($data=$re->read($std_id))
  {
      foreach ($data as $key => $value) 
      {
        foreach ($value as $k => $v) {$row[$k]=$v;}?>
           <div class=" col-md-3" style="margin-bottom: 10px">
           <div class="grey-box-icon">
           <div class="icon-box-top grey-box-icon-pos">
           <img src="img/2.png" alt="" /></div>
           <?php
              $ex= new Exam();
              $exam_id=$row['exam_id'];
              $examdata=$ex->readById($exam_id);
              $examSet=$examdata[0];
              echo " <h4>{$examSet['name']}</h4>";
              echo "<h5>Grade= {$row['mark']}</h5>";
                             
              echo "<a href='result.php?result={$row['mark']}&eid={$row['exam_id']}'><button type='button' class='btn btn-primary'>
                Show</button></a>";?> 
              </div>
              </div>
<?php }}?>
              </div>
              </div>
              </div>


<?php include("includes/home_footer.php");?>