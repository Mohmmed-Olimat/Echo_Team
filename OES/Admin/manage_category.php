 <?php
    
   include('includes/categoryClass.php');
   $x = new category();

    if(isset($_POST['submit'])){
      
        
    
    $x->cat_name    = $_POST['cat_name'];
    $x->cat_desc    = $_POST['cat_desc'];
    $x->cat_image       = $_FILES['cat_image']['name'];
    $tmp_name       =$_FILES['cat_image']['tmp_name'];
    $path           ='img/category/';

    move_uploaded_file($tmp_name,$path.$x->cat_image);
    
    $q=$x->create();
    
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
                                <input type="text" class="form-control" name="cat_name" />
                            </div>
                        </div>
                    </div>

                
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Category Description
                             <input type="text" class="form-control" name="cat_desc" />
                         </div>  
                     </div>
                 </div>    
                 <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                             Category Image
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
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
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
                                                echo "<td>{$row['cat_id']}</td>";
                                                echo "<td>{$row['cat_name']}</td>";
                                                echo "<td>{$row['cat_desc']}</td>";
                                                echo "<td><img src='img/category/{$row['cat_image']}' width='100' height='100'></td>";
                                                echo "<td><a href='edit_category.php?id={$row['cat_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='delete_category.php?id={$row['cat_id']}' class='btn btn-danger'>Delete</a></td>";
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



       