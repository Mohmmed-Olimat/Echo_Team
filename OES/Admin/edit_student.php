<?php
 
   include('includes/studentClass.php');
   $x = new Student();
   $id =$_GET['id'];
   $data=$x->readById($id);
   $studentSet=$data[0];

        if(isset($_POST['submit'])){
           /* echo "<pre>";
            print_r($_POST);
           print_r($_FILES);
            

            die();
*/
      
        $x->email      = $_POST['email'];
        $x->full_name  = $_POST['full_name'];
        $x->password   = $_POST['password'];
        $x->mobile     = $_POST['mobile'];
        $x->edu_level  = $_POST['edu_level'];

        if ($_FILES['student_image']['name']){
        $x->image      = $_FILES['student_image']['name'];
        }
        else{
        $x->image      = $studentSet['image'];}
        $tmp_name      =$_FILES['student_image']['tmp_name'];
        $path          ='img/student/';

        move_uploaded_file($tmp_name,$path.$x->image);
    
  
        $q=$x->update($id);
    
        if($q){
        header("location:manage_student.php");
        }
        
}
    
        
       




?>
 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Edit Student</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="pl-5" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Email
                                <input type="email" class="form-control" name="email" value="<?php 
                                echo $studentSet['email'];?>"/>
                            </div>
                        </div>
                    </div>                                      
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Full Name
                                <input type="text" class="form-control" name="full_name" value="<?php 
                                echo $studentSet['full_name'];?>"/>
                            </div>
                        </div>
                    </div>

              
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Password
                             <input type="password" class="form-control" name="password" value="<?php 
                                echo $studentSet['password'];?>"/>
                         </div>  
                     </div>
                 </div>
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Mobile
                             <input type="text" class="form-control" name="mobile" value="<?php 
                                echo $studentSet['mobile'];?>"/>
                         </div>  
                     </div>
                 </div>  
                 <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Education level
                             <input type="text" class="form-control" name="edu_level" value="<?php 
                                echo $studentSet['edu_level'];?>"/>
                         </div>  
                     </div>
                 </div> 
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Student Image
                             <?php
                             echo "<img src='img/student/{$studentSet['image']}' width='100' height='100'>";
                             ?>
                         </div>  
                     </div>
                 </div> 
                 
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                            Change Student Image
                             <input  name="student_image" type="file"  class="form-control" >
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
