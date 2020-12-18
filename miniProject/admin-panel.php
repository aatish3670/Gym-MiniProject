<!DOCTYPE html>
<?php



$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";


$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$query = "SELECT * FROM `Trainer`";



$result1 = mysqli_query($connect, $query);



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./admin-style.css">
</head>

<body>



  
    <nav class="nav">
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
<div id="admin-background">
    <main>
        <h1 id="heading">Welcome To GymKhana</h1>
        <br />
        <a href="./gymLogin.html"></a>
       
    </main>
</div>


  




        <div class="container-content">


            <div class="details-content">
                <div class="list-group">
                    <a href="" class="list-group-item " style="background-color: #3a3939;
                    color: white;">Members</a>
                    <a href="member_details.php" class="list-group-item">Member details</a>
                   

                </div>
                

                <hr>
                
                <div class="list-group">
                    <a href="" class="list-group-item" style="background-color: #3a3939;
                    color: white;">Trainer</a>
                    
                    <a href="trainer-detail.php" class="list-group-item active">Trainer details</a>

                </div>

            </div>











            <div class="register-content" style="background: whitesmoke;">

                <div class="register-body">
                    <h3>Register new members</h3>
                </div>
                
                <form class="form-group" action="func.php" method="post">
                    <label>First name:</label>
                    <input type="text" name="fname" class="form-control"><br>
                    <label>Last name:</label>
                    <input type="text" name="lname" class="form-control"><br>
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Contact:</label>
                    <input type="tel" name="contact" class="form-control" required pattern="[0-9]{10}"><br>
                    <label>Trainer </label> 
 <select class="form-control" name="trainer_id">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>">
             <?php echo $row1[1];?>
             </option>

            <?php endwhile;?>

        </select>
                    <br>

                    <input type="submit" class="join-btn" name="pat_submit" value="Register"><a href="func.php"
                      ></a>


                </form>
         
            </div>



        </div>

















   

</body>

</html>