<?php
 
   include('includes/adminClass.php');
   $x = new Admin();
   $id =$_GET['id'];

    if(isset($_POST['submit'])){
      
        
    
    $x->admin_email = $_POST['admin_email'];
    $x->password    = $_POST['admin_password'];
    $x->admin_name  = $_POST['admin_fullname'];
    $q=$x->update($id);
    
    if($q){
        header("location:manageadmin.php");
        
    }
}       
        $data=$x->readById($id);
        $adminSet=$data[0];
       




?>
 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Edit Admin</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" class="pl-5" method="post">                                              
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Full Name
                                <input type="text" class="form-control" name="admin_fullname" value="<?php 
                                echo $adminSet['admin_name'];?>"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Email
                                <input type="email" class="form-control" name="admin_email" value="<?php
                                 echo $adminSet['admin_email']; ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Password
                             <input type="password" class="form-control" name="admin_password" value="<?php
                              echo $adminSet['password']; ?>"/>
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

