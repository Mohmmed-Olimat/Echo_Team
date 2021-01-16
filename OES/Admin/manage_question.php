 <?php
    
   include('includes/questionClass.php');
   
   $x = new Question();
   

    if(isset($_POST['submit'])){

       
    $x->exam_id        = $_POST['exam_id'];
    $x->question_text  = $_POST['question_text'];
    $x->option1        = $_POST['option1'];
    $x->option2        = $_POST['option2'];
    $x->option3        = $_POST['option3'];
    $x->option4        = $_POST['option4'];
    $x->answer         = $_POST['answer'];


    
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
                <form action="" class="pl-5" method="post">   
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
                                Question
                                <textarea id="q" name="question_text" rows="3"  class="form-control"></textarea>
                               
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option1
                                <input type="text" class="form-control" name="option1"/>
                            </div>
                        </div>
                    </div>
                      <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option2
                                <input type="text" class="form-control" name="option2"/>
                            </div>
                        </div>
                    </div>
                     <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option3
                                <input type="text" class="form-control" name="option3"/>
                            </div>
                        </div>
                    </div>
                     <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Option4
                                <input type="text" class="form-control" name="option4"/>
                            </div>
                        </div>
                    </div>
                     <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                               Correct Answer
                                <select class="form-control" name="answer" >
                                                <option value="0">Please select</option>
                                                <option value="option1">option1</option>
                                                <option value="option2">option2</option>
                                                <option value="option3">option3</option>
                                                <option value="option4">option4</option>
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
                            <th>ID</th>
                            <th>Exam ID</th>
                            <th>Question</th>
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
                          
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                                echo "<tr>";
                                                echo "<td>{$row['q_id']}</td>";
                                                echo "<td>{$row['exam_id']}</td>";
                                                echo "<td>{$row['question_text']}</td>";
                                                echo "<td>{$row['option1']}</td>";
                                                echo "<td>{$row['option2']}</td>";
                                                echo "<td>{$row['option3']}</td>";
                                                echo "<td>{$row['option4']}</td>";
                                                echo "<td>{$row['answer']}</td>";

                                                echo "<td><a href='edit_question.php?id={$row['q_id']}&exam_id={$row['exam_id']}&answer={$row['answer']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_question.php?id={$row['q_id']}' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                            
                                            
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

       
        <!-- Body End -->



  <?php include("includes/admin_footer.php");?>



       