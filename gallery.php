<?php
		include('connect.php');		
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HOWDYDOO</title>
      <!-- My Stylesheet -->
      <link href="css/stylesheet.css" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Fonts -->
      <link rel="stylesheet" href="fonts/RevlonTypeWeb/Gotham-Medium/styles.css">
      <link rel="stylesheet" href="fonts/RevlonTypeWeb/Gotham-Light/styles.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="container">
         <div class="jumbotron">
            <a href="index.html"><img src="img/logo.svg" alt="HOWDYDOO" class="logo" title="HOWDYDOO"></a>
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
						while($row = mysqli_fetch_array($image))
						{
							$id = $row['ID'];
							$img = $row['image'];
						
				?>
				   <li class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
						<a href="bio.php?id=<?php echo $id;?>">
							<img src="<?php echo $path.$img; ?>" alt="logo" width="60" height="60"/>
						</a>
					</li>
				<?php } ?>
            </ul>
         </div>
      </div>
      <!-- Footer -->
      <div id="footer">
         <div class="container" align="center">
            <p>BROUGHT TO YOU BY<br>
               <a href="index.html"><img src="img/hogarth_and_ogilvy.svg" alt="HOWDYDOO" class="footer_logo" title="HOWDYDOO"></a>
            </p>
         </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>