<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
    <link rel="stylesheet" href="./admin-style.css">
</head>
<body>
</nav>
    <nav >
    <a href="admin-panel.php">
        <div class="logo">
            <h1>LOGO</h1>
        </div>
</a>

        <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
                             
                              <button class="join-btn"> <a href="index.php">Logout</a></button>';
							
						}
				   
				    ?>
					
				
		       </div>
           

        </div>
    </nav>
    <div id="trainer-background">
    <main>
        <h1 id="heading">Welcome To GymKhana</h1>
        <br />
        <a href="./gymLogin.html"></a>
      
    </main>
          </div>
    <div class="container-detail">
       
         <div class="detail-body">
        
            <div class="heading-body">
                        <a href="admin-panel.php" class="join-btn">Go Back</a>
             
                        <h3> Trainer Information</h3>
            </div>
            <div class="container-table">
              <table class="table table-hover">
                      <thead>
                       <tr>
                        <th>Trainer ID</th>
                        <th>Name</th>
                       <th>Phone</th>
         
                       </tr>   
                      </thead>
                      <tbody>
                        <?php get_trainer(); ?>
                       </tbody>
              </table>

</div>

  </div>  
   </div>
    </body>
</html>