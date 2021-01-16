 <?php
    
   include('includes/examClass.php');
   
   $x = new Exam();
   

    if(isset($_POST['submit'])){
      
        
    
    $x->name = $_POST['name'];
    $x->cat_id    = $_POST['cat_id'];
    
    $q=$x->create();
    
    if($q){
        header("location:manage_exam.php");
        
    }
}
 ?>





 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Create Exam</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" class="pl-5" method="post">                                              
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Exam Name
                                <input type="text" class="form-control" name="name" />
                            </div>
                        </div>
                    </div>

                
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Category ID
                             
                             <select name="cat_id" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                            <?php
                                             if ($data=$x->readAllcategory()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                            
                                            $i=$row['cat_id'];
                                            echo "<option value=$i>";
                                            echo "{$row['cat_name']}";
                                            echo "</option>";

                                            }
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
                            <th>Exam Name</th>
                            <th>Category ID</th>
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
                                                echo "<td>{$row['exam_id']}</td>";
                                                echo "<td>{$row['name']}</td>";
                                                echo "<td>{$row['cat_id']}</td>";

                                                echo "<td><a href='edit_exam.php?id={$row['exam_id']}&cat_id={$row['cat_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_exam.php?id={$row['exam_id']}' class='btn btn-danger'>Delete</a></td>";
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



       