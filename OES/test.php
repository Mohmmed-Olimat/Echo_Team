 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap-4.1/bootstrap.min.css">




<form id="form" method="post">
    <div id="userDiv"><label>UserId</label>
         <input type="text" name="userId" id="userId" placeholder="UserId"/> <br></div>
    <button type="button" id="btn" class="btn btn-info" data-toggle="modal" data-target="#myModal">Send Data</button>
</form>


<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">MyModal</h4>
      </div>
      <div class="modal-body">
        <div id="bingo"></div>

      </div>
    </div>
   </div>
</div>

<script>
    $(document).ready(function(){
        $("#btn").click(function(){
            var vUserId = $("#userId").val();
         if(vUserId=='')
         {
             alert("Please enter UserId");
         }
         else{
            $.post("result.php", //Required URL of the page on server
               { // Data Sending With Request To Server
                  user:vUserId,
               },
         function(response,status){ // Required Callback Function
             $("#bingo").html(response);//"response" receives - whatever written in echo of above PHP script.
             $("#form")[0].reset();
          });
        }
     });
   });
</script>


<?php
   if($_POST["user"])
   {
        $user = $_POST["userId"];
       // Here, you can also perform some database query operations with above values.
       echo "Your user id is: ". $user;
  }
?>