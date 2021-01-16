 <?php
    
   include('includes/categoryClass.php');
   $x = new category();
   $id =$_GET['id'];
   $data=$x->readById($id);
    $categorySet=$data[0];
    if(isset($_POST['submit'])){
      
        
    
    $x->cat_name    = $_POST['cat_name'];
    $x->cat_desc    = $_POST['cat_desc'];
    if ($_FILES['cat_image']['name']){
        $x->cat_image      = $_FILES['cat_image']['name'];
        }
        else{
        $x->cat_image      = $categorySet['cat_image'];}
        $tmp_name      =$_FILES['cat_image']['tmp_name'];
        $path          ='img/category/';

        move_uploaded_file($tmp_name,$path.$x->cat_image);
    
    $q=$x->update($id);
    
    if($q){
        header("location:manage_category.php");
        
    }
}


    
 ?>





 <?php include("includes/admin_header.php");?>




       <!-- Body -->

       <div class="sparkline12-list">
        <div class="main-sparkline12 text-center">
            <h2>Create Category</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" class="pl-5" method="post" enctype="multipart/form-data">                                              
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                Category Name
                                <input type="text" class="form-control" name="cat_name" value="<?php 
                                echo $categorySet['cat_name'];?>"/>
                            </div>
                        </div>
                    </div>

                
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Category Description
                             <input type="text" class="form-control" name="cat_desc" value="<?php 
                                echo $categorySet['cat_desc'];?>" />
                         </div>  
                     </div>
                 </div>    
                 <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             category Image
                             <?php
                             echo "<img src='img/category/{$categorySet['cat_image']}' width='100' height='100'>";
                             ?>
                         </div>  
                     </div>
                 </div> 
                 <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                            Change category Image
                             <input  name="cat_image" type="file"  class="form-control" >
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


