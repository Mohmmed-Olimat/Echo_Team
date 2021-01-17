<?php include("includes/home_header.php");
    
    $e= new Exam();
    $catid=$_GET['catid'];
    
     

?>



<div class="row " style="margin:15px;"> <!-- Row Start -->

    <h1><p style="text-align: center;margin-top: 15px">Exams</p></h1>
    <hr>
    <!-- Card Start -->
    <?php
     if ($data=$e->readBycatId($catid)){
                          
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}

    echo"
    <div class='col-lg-4 col-md-5 col-sm-12 col-xs-12'> 
    <div  style='margin-bottom: 10px'>
     <div class='grey-box-icon'>
     <div class='icon-box-top grey-box-icon-pos' style='overflow:hidden' >
                <img src='img/4.png' alt=''  />
                </div><!--icon box top -->
        <h4> {$row['name']} </h4>
       
                          
        <a href='exam1.php?eid={$row['exam_id']}'><button type='button' class='btn btn-lg btn-primary'>Start</button></a>
                        </div><!--grey box -->
                    </div>
                   </div>";
               }
           }
                   ?>
                   <!--Card End -->



                    </div> <!-- Row End -->
                    
               
            

    


<?php include("includes/home_footer.php");?>