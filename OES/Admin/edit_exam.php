 <?php
    
   include('includes/examClass.php');
   
   $x       = new Exam();
   $id      =$_GET['id'];
   $catid   =$_GET['cat_id'];

    if(isset($_POST['submit'])){
      
        
    
    $x->name      = $_POST['name'];
    $x->cat_id    = $_POST['cat_id'];
    

    $q=$x->update($id);
    
    if($q){
        header("location:manage_exam.php");
        
    }
}

    $data=$x->readById($id);
    $examSet=$data[0];
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
                                <input type="text" class="form-control" name="name" value="<?php 
                                echo $examSet['name'];?>"/>
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
                                            echo "<option value=$i";
                                            if($catid==$row['cat_id']){echo " selected";}
                                            echo ">";
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






       