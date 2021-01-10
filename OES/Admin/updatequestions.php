 <?php include("includes/admin_header.php");?>




       <!-- Body -->
    
   

                
                        <div class="sparkline12-list">
                            
                                <div class="main-sparkline12 text-center">
                                    <h2>Update Question</h2>
                                </div>
                         
                                   <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            
                                                <form action="#" class="pl-5" method="post">
                                                
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12" >
                                                                Question Text
                                                                <textarea  name="question_text" class="form-control cc-name valid"></textarea>
                                                        </div>
                                                    </div>
                                               
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                Option1 
                                                                <input type="text" class="form-control" name="option1" />
                                                         </div>
                                                        </div>
                                                    </div>
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                Option2
                                                                <input type="text" class="form-control" name="option2" />
                                                         </div>
                                                        </div>
                                                    </div>
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                Option3
                                                                <input type="text" class="form-control" name="option3" />
                                                         </div>
                                                        </div>
                                                    </div>
                                                         <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                Option4
                                                                <input type="text" class="form-control" name="option4" />
                                                         </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                               Correct Answer
                                                                <input type="text" class="form-control" name="correct" />
                                                      </div>  
                                                  </div>
                                                    </div>
                                             <div class="form-group-inner">
                                                <div class="row">
                                               <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                Exam Type
                                              <select class="form-control" name="exam" >
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                              </select>
                                              <br>
                                              </div>
                                            </div>
                                        </div>
                                          
                                        </div>
                                                  
                                                 
                                                 
                                              <div >      
                                                     
                                         <button class="btn btn-lg btn-info col-lg-12" type="submit" name="save">
                                           Update
                                         </button>
                                           
                                                   </div>    


                                                </form>
                                           
                                        </div>
                                    </div>
       
        <!-- Body End -->



  <?php include("includes/admin_footer.php");?>



       