<?php
	include('connect.php');			
	include_once("head.php");		
	$id = $_GET['id'];		
?>
      <div class="container">
         <div class="jumbotron">
           <a href="index.php"><img src="img/logo.svg" alt="HOWDYDOO" class="logo" title="HOWDYDOO"></a>
         </div>
   <div class="row" style="background:#FFF;">
			  

			<?php
						$path = "img/redworks/";
						$profile = mysqli_query($conn,"SELECT * FROM staff WHERE ID=$id"); 						
						if($profile){
							try {
									while($row = mysqli_fetch_array($profile)){
										   $name = 	$row['name'];
										   $aka =	$row['aka'];
										   $job =   $row['tittle'];
										   $bio =   $row['bio'];
										   $img =   $row['image'];				
			?>								  
          <div class="col-md-5" style="margin-top:15px;"><img src="<?php echo $path.$img; ?>" width="286" height="291"></div>
          <div class="col-md-7" style="margin-top:15px;">
            <form role="form" action="insert.php" id="staff_form" method="post" onsubmit="return muModal(this)">
               <div class="form-group">
                 <label class="col-xs-3 control-label">
                 <h4>Name:</h4></label>
                  <input type="text" class="form-control" id="text_field" value="<?php echo $name; ?>" name="name" required/>
               </div>
               <div class="form-group">
                  <label class="col-xs-3 control-label"><h4>AKA:</h4></label>
                  <input type="text" class="form-control" id="text_field" value="<?php echo $aka; ?>" name="aka" required/>
               </div>
               <div class="form-group">
                  <label class="col-xs-3 control-label"><h4>Job Tittle:</h4></label>
                  <input type="text" class="form-control" id="text_field" value="<?php echo $job; ?>" name="tittle" required/>
               </div>
               <div class="form-group">
        <label class="col-xs-3 control-label"><h4>Location:</h4></label>
        <div class="col-xs-9">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="location" value="hogarth" required/> Hogarth
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="location" value="redworks" required/> Redworks
                </label>
            </div>
        </div> 
        </div>
        <div class="form-group">
        <div class="col-xs-12" style="margin-top:20px;">
                  <label for="comment"><h4>More about me:</h4></label>
                   <textarea class="form-control" rows="5" id="comment" name="bio" required><?php echo $bio; ?></textarea>
          </div>
              </div>
                <div class="form-group">
               <button type="submit" class="btn btn-default" id="submit" data-toggle="modal" data-target="#myModal">Submit</button>
               </div>
			  <?php
			  
														}
							}
							catch(Exception $e)
							{
								echo $e;
							}
						}
			  
			  ?> 
			   
            </form>
     </div>
     
      </div>
      <!-- Footer -->
      <div id="footer">
         <div class="container" align="center">
            <p>BROUGHT TO YOU BY<br>
              <a href="index.php"><img src="img/hogarth_and_ogilvy.svg" alt="Hogarth &amp; Ogilvy" class="footer_logo" "Hogarth &amp; Ogilvy"></a>
            </p>
         </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/validation.js"></script>
   </body>
</html>