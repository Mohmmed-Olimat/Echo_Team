 <?php
    
   include('includes/questionClass.php');
   
   $x          = new Question();
   $id         =$_GET['id'];
   $examid     =$_GET['exam_id'];
   $answer     =$_GET['answer'];
   $img        =$_GET['img'];
   $data       =$x->readById($id);
   $questionSet=$data[0];



    if(isset($_POST['submit'])){

       
    $x->exam_id        = $_POST['exam_id'];
    $x->question_text  = $_POST['question_text'];
    if ($questionSet['option1']=='True'){
    $x->option1        = 'True';
    $x->option2        = 'False';

    }
    else {
    $x->option1        = $_POST['option1'];
    $x->option2        = $_POST['option2'];
    }
    $x->option3        = $_POST['option3'];
    $x->option4        = $_POST['option4'];
    $x->answer         = $_POST['answer'];
    if ($_FILES['q_image']['name']){
        $x->q_img      = $_FILES['q_image']['name'];
        }
        else{
        $x->q_img      = $questionSet['q_img'];
    }
        $tmp_name      =$_FILES['q_image']['tmp_name'];
        $path          ='img/questionimg/';

        move_uploaded_file($tmp_name,$path.$x->q_img);


    
    $q=$x->update($id);
    
    if($q){
        header("location:manage_question.php");
        
    }
}

    
 ?>





 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Edit Question</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" class="pl-5" method="post" enctype="multipart/form-data">   
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Exam Name
                             
                             <select name="exam_id" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                            <?php
                                             if ($data=$x->readAllexam()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                            
                                            $i=$row['exam_id'];
                                             echo "<option value=$i";
                                            if($examid==$row['exam_id']){echo " selected";}
                                            echo ">";
                                            echo "{$row['name']}";
                                            echo "</option>";
                                            }
                                        }
                                             ?>
                                                    </select>
                         </div>  
                     </div>
                 </div>                                            
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Question
                                <textarea id="q" name="question_text" rows="3"  class="form-control"><?php 
                                echo $questionSet['question_text'];?></textarea>
                               
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($img){
                      echo "  
                      <div class='form-group-inner'>
                        <div class='row'>
                            <div class='col-lg-12 col-md-3 col-sm-3 col-xs-12'>
                             Question Image
                             
                             <img src='img/questionimg/$img' width='100' height='100'>
                            
                         </div>  
                     </div>
                 </div>"; 
             }
                 ?>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option1
                                <input type="text" class="form-control" name="option1" value="<?php 
                                echo $questionSet['option1'];?>"
                                <?php
                                if($questionSet['option1']=='True')
                                    echo " disabled";
                                ?>

                                />
                            </div>
                        </div>
                    </div>
                      <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option2
                                <input type="text" class="form-control" name="option2" value="<?php 
                                echo $questionSet['option2'];?>"

                                <?php
                                if($questionSet['option2']=='False')
                                    echo " disabled";
                                ?>


                                />
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!($questionSet['option2']=='False')) 
                    {
                        echo"
                     <div class='form-group-inner'>
                        <div class='row'>
                            <div class='col-lg-12 col-md-3 col-sm-3 col-xs-12'>
                                Option3
                                <input type='text' class='form-control' name='option3' value='{$questionSet['option3']}'/>
                            </div>
                        </div>
                    </div>
                     <div class='form-group-inner'>
                        <div class='row'>
                            <div class='col-lg-12 col-md-3 col-sm-3 col-xs-12'>
                                Option4
                                <input type='text' class='form-control' name='option4' value='{$questionSet['option4']}'/>
                            </div>
                        </div>
                    </div>";
                }
                    ?>
                     <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                               Correct Answer
                                <select class="form-control" name="answer" >
                                                
                                            <?php
                                      
                                            for ($i=1;$i<5;$i++) { 
                                                $op='option'.$i;
                                                echo "<option value='$op'";
                                                if($op==$answer){echo " selected";}
                                                echo ">";
                                                   echo $op;
                                                     echo "</option>";
                                            }

                                             ?>
                                              </select>
                            </div>
                        </div>
                    </div>

                    
                      
                 <div>      

                   <button class="btn btn-lg btn-info col-lg-12" type="submit" name="submit">
                    Save
                </button>

            </div>    
        </form>
    </div>
</div>
</div>





       
        <!-- Body End -->



  <?php include("includes/admin_footer.php");?>



       