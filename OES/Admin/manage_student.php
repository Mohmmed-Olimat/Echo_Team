 <?php
    
   include('includes/studentClass.php');
   $x = new Student();

    if(isset($_POST['submit'])){
      
        $x->email      = $_POST['email'];
        $x->full_name  = $_POST['full_name'];
        $x->password   = $_POST['password'];
        $x->mobile     = $_POST['mobile'];
        $x->edu_level  = $_POST['edu_level'];
        $x->image      = $_FILES['student_image']['name'];
        $tmp_name      =$_FILES['student_image']['tmp_name'];
        $path          ='img/student/';

        move_uploaded_file($tmp_name,$path.$x->image);
    
  
        $q=$x->create();
    
        if($q){
        header("location:manage_student.php");
        }
}


 ?>





 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Create Student</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="pl-5" action="" method="post" enctype="multipart/form-data">    
                          <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Email
                                <input type="email" class="form-control" name="email"/>
                            </div>
                        </div>
                    </div>                                      
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Full Name
                                <input type="text" class="form-control" name="full_name" />
                            </div>
                        </div>
                    </div>

              
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Password
                             <input type="password" class="form-control" name="password" />
                         </div>  
                     </div>
                 </div>
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Mobile
                             <input type="text" class="form-control" name="mobile" />
                         </div>  
                     </div>
                 </div>  
                 <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Education level
                             <input type="text" class="form-control" name="edu_level" />
                         </div>  
                     </div>
                 </div> 
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Student Image
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
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Password</th>
                            <th>Mobile</th>
                            <th>Education level</th>
                            <th>image</th>
                            <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          if($data=$x->readAll()){
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                                echo "<tr>";
                                                echo "<td>{$row['stu_id']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                                echo "<td>{$row['full_name']}</td>";
                                                echo "<td>{$row['password']}</td>";
                                                echo "<td>{$row['mobile']}</td>";
                                                echo "<td>{$row['edu_level']}</td>";
                                                echo "<td><img src='img/student/{$row['image']}' width='100' height='100'></td>";

                                                echo "<td><a href='edit_student.php?id={$row['stu_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_student.php?id={$row['stu_id']}' class='btn btn-danger'>Delete</a></td>";
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



       