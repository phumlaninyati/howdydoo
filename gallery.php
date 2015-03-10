<?php
	include('connect.php');			
	include_once("head.php");
?>
   <body>
      <div class="container">
         <div class="jumbotron">
            <a href="index.php"><img src="img/logo.svg" alt="HOWDYDOO" class="logo" title="HOWDYDOO"></a>
         </div>
         <div class="row">
            <div class="col-sm-12" style="float:right; left:180px;">
               <p align="center">find your pic, Click on it<br>
                  and TELL US ABOUT YOURSELF!
               </p>
            </div>
           <ul class="row">
				<?php
						$path = "img/redworks/";
						$image = mysqli_query($conn,"SELECT * FROM staff ORDER BY ID DESC"); 
						if($image) { 
							try {
									while($row = mysqli_fetch_array($image))
									{
										$id = $row['ID'];
										$img = $row['image'];
						
				?>
				   <li class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
						<a href="bio.php?id=<?php echo $id;?>">
							<img src="<?php echo $path.$img; ?>" alt="Partner" width="60" height="60" title="Partner"/>
						</a>
					</li>
				<?php 
					}
						}
						catch(Exception $e)
						{
							echo $e;
						}
							}							
				?>
            </ul>
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
   </body>
</html>