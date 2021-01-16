 <?php
    
   include('includes/questionClass.php');
   
   $x = new Question();
   

    if(isset($_POST['submit'])){

       
    $x->exam_id        = $_POST['exam_id'];
    $x->question_text  = $_POST['question_text'];
    
    if ($_POST['q_type']==2){
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
    $x->q_img          = $_FILES['q_image']['name'];
    $tmp_name          =$_FILES['q_image']['tmp_name'];
    $path              ='img/questionimg/';

   /* echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    die();*/

    move_uploaded_file($tmp_name,$path.$x->q_img);


    
    $q=$x->create();
    
    if($q){
        header("location:manage_question.php");
        
    }
}
 ?>





 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Create Question</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group-inner" >
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Add Image
                             <button id="addimg" onclick="showimg()">Add Image</button>
                         </div>  
                     </div>
                 </div> 
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
                                            echo "<option value=$i>";
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
                                Question Type
                                <select name="q_type" id="q_type" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Multiple Choices</option>
                                        <option value="2">TRUE Or False</option>
                               </select>
                            </div>
                        </div>
                    </div>
                     
                      <div class="form-group-inner" id="imgdiv">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Question Image
                             <input  name="q_image" type="file"  class="form-control" id="q_image" >
                         </div>  
                     </div>
                 </div>                                        
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Question
                                <textarea id="q" name="question_text" rows="3"  class="form-control"></textarea>
                               
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner" id="op1">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option1
                                <input type="text" class="form-control" name="option1" id="op1t" />
                            </div>
                        </div>
                    </div>
                      <div class="form-group-inner" id="op2">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option2
                                <input type="text" class="form-control" name="option2" id="op2t" />
                            </div>
                        </div>
                    </div>
                     <div class="form-group-inner" id="op3">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option3
                                <input type="text" class="form-control" name="option3"/>
                            </div>
                        </div>
                    </div>
                     <div class="form-group-inner" id="op4">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option4
                                <input type="text" class="form-control" name="option4"/>
                            </div>
                        </div>
                    </div>
                     <div class="form-group-inner" id="cor">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                               Correct Answer
                                <select class="form-control" name="answer" >
                                                <option value="0" >Please select</option>
                                                <option value="option1">option1</option>
                                                <option value="option2">option2</option>
                                                <option value="option3" id="cop3">option3</option>
                                                <option value="option4" id="cop4">option4</option>
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





<div class="sparkline12-list mg-tb-30">



 <div class="row">
   <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <div class="sparkline8-list">

        <div class="sparkline8-graph">
            <div class="static-table-list">
                <table class="table">
                    <thead class="" style="background-color: gray;">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Exam ID</th>
                            <th>Question</th>
                            <th>image</th>
                            <th>Option1</th>
                            <th>Option2</th>
                            <th>Option3</th>
                            <th>Option4</th>
                            <th>Correct Answer</th>
                            <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($data=$x->readAll()){

                            $i=1;
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>{$row['q_id']}</td>";
                                                echo "<td>{$row['exam_id']}</td>";
                                                echo "<td>{$row['question_text']}</td>";
                                                if($row['q_img']){
                                                echo "<td><img src='img/questionimg/{$row['q_img']}' width='100' height='100' alt='No img'></td>";}
                                                else {echo "<td></td>";}

                                                echo "<td>{$row['option1']}</td>";
                                                echo "<td>{$row['option2']}</td>";
                                                echo "<td>{$row['option3']}</td>";
                                                echo "<td>{$row['option4']}</td>";
                                                echo "<td>{$row['answer']}</td>";

                                                echo "<td><a href='edit_question.php?id={$row['q_id']}&exam_id={$row['exam_id']}&answer={$row['answer']}&img={$row['q_img']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_question.php?id={$row['q_id']}' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                                $i++;
                                            
                                            
                                        }
                                           

                                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

       <script type="text/javascript">
        
           $(document).ready(function(){
            //alert("JQ");});
        $("#op1").hide();
        $("#op2").hide();
        $("#op3").hide();
        $("#op4").hide();
        $("#cor").hide();
        $("#imgdiv").hide();

        
            
        
    

       $("#q_type").change(function(){
        var selectedtype = $(this).children("option:selected").val();
      //  alert("You have selected the country - " + selectedCountry);
      //alert(selectedtype);
      if(selectedtype==1){
        $("#op1").show();
        $("#op2").show();
        $("#op3").show();
        $("#op4").show();
        $("#cor").show();
        $("#op1t").val("");
        $("#op2t").val("");
         $("#cop3").show();
        $("#cop4").show();

      }
      if(selectedtype==2){
        $("#op1").show();
        $("#op1t").val("True");
        $("#op1t").prop("disabled","True");
        $("#op2").show();
        $("#op2t").val("False");
        $("#op2t").prop("disabled","True");
        $("#op3").hide();
        $("#op4").hide();
        $("#cop3").hide();
        $("#cop4").hide();

        $("#cor").show();

      }


        });});

         function showimg(){
            $("#imgdiv").toggle('slow');
      
        }
       </script>
        <!-- Body End -->



  <?php include("includes/admin_footer.php");?>



       