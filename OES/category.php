<?php include("includes/home_header.php");
    
    $c= new Category();
     

?>



<div class="row " style="margin:15px;"> <!-- Row Start -->

    <h1><p style="text-align: center;margin-top: 15px">Exam Categorys</p></h1>
    <hr>
    <!-- Card Start -->
    <?php
     if ($data=$c->readAll()){
                          
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}

    echo"
    <div class='col-lg-4 col-md-5 col-sm-12 col-xs-12'> 
    <div  style='margin-bottom: 10px'>
     <div class='grey-box-icon'>
     <div class='icon-box-top grey-box-icon-pos' style='overflow:hidden' >
                <img src='Admin/img/category/{$row['cat_image']}' alt=''  width='300' height='150'/>
                </div><!--icon box top -->
        <h4> {$row['cat_name']} </h4>
        <p style=''>{$row['cat_desc']}.</p>
                          
        <a href='exam.php?catid={$row['cat_id']}'><button type='button' class='btn btn-lg btn-primary'>Start</button></a>
                        </div><!--grey box -->
                    </div>
                   </div>";
               }
           }
                   ?>
                   <!--Card End -->



                    </div> <!-- Row End -->
                    
               
            

    


<?php include("includes/home_footer.php");?>