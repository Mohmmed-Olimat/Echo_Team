 <?php
    
   include('includes/adminClass.php');
   $x = new Admin();

    if(isset($_POST['submit'])){
      
        
    
    $x->admin_email = $_POST['admin_email'];
    $x->password    = $_POST['admin_password'];
    $x->admin_name  = $_POST['admin_fullname'];
    $q=$x->create();
    
    if($q){
        header("location:manageadmin.php");
        
    }
}
 ?>





 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Create Admin</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" class="pl-5" method="post">                                              
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Full Name
                                <input type="text" class="form-control" name="admin_fullname" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Email
                                <input type="email" class="form-control" name="admin_email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Password
                             <input type="password" class="form-control" name="admin_password" />
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
                            <th>Name</th>
                            <th>Password</th>
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
                                                echo "<td>{$row['admin_id']}</td>";
                                                echo "<td>{$row['admin_email']}</td>";
                                                echo "<td>{$row['admin_name']}</td>";
                                                echo "<td>{$row['password']}</td>";

                                                echo "<td><a href='edit_admin.php?id={$row['admin_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_admin.php?id={$row['admin_id']}' class='btn btn-danger'>Delete</a></td>";
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



       