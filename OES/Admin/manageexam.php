 <?php include("includes/admin_header.php");?>




       <!-- Body -->
    
   

                
                        <div class="sparkline12-list">
                            
                                <div class="main-sparkline12 text-center">
                                    <h2>Create Exam</h2>
                                </div>
                         
                                   <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            
                                                <form action="#" class="pl-5">
                                                
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                Exam Name
                                                                <input type="text" class="form-control" /> </div>
                                                        </div>
                                                    </div>
                                               
                                                    



                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                Category ID
                                                                <select class="form-control" name="cat_id">
                                                    <option>please select</option>
                                                 
                                                    
                                                </select> </div>
                                                        </div>
                                                    </div>
                                                  
                                                 
                                                 
                                              <div >      
                                                     
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
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Exam Name</th>
                                                <th>Category ID</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <td><a href="edit_exam.php" class="btn btn-primary">Edit</a></td>
                                        <td><a href="delete_exam.php" class="btn btn-danger">Delete</a></td>
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



       