
<!DOCTYPE html>
 <html>
<html>
<head>
	<title>Dkut Noticeboard</title>
	

	 
	

<!--bootstrap links-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



<link rel="stylesheet" type="text/css" href="noticeboard.css">
</head>

<body>


	<!--bootstrap links-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>






<div class="container">
	<div id="samp">
		<h1 id="mainhearder">Dkut Online Noticeboard</h1></h1>
		<h3>Texts</h3>
		<div  class="sidenav">
		<a href="textposts.php">Stories</a>
		<a  href="pictureposts.php">Pictures</a>
		<a  href="videoposts.php">Videos</a>
		<a  href="audioposts.php">Audios</a>
		
	  </div>

		
	</div>
	



<div id="secvideos" style="width: 1000px; margin-left: 50px;">

<h1 style="color: red;margin-left: 30%;">NEW</h1>

		<div id="postsclass3">
			<!--This is where the text posts appear-->
        
			<?php
		include('db.php');
		$sql="SELECT * FROM textsdkut ORDER BY ID DESC";
		$result= mysqli_query($con,$sql);
		$queryResults= mysqli_num_rows($result);
		
		if($queryResults >0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "
				<div style='height: auto; border-radius: 10px; margin-bottom= 0%;  margin-top: 10%; width: 80%;'>
				
					<div style='height: auto;color: white; width:100%;padding: 50px; background-color: grey; border-radius: 10px; margin-left: 0%;'>".$row['textpost']."</div>
				</div>
		
				";
	
			
		
			
			}
		}else{
			echo"<script>alert('No record yet')</script>";
			}

		
		?>
	
		</div>
	
	

	

</div>



</div>





</body>
</html>


<?php
include('db.php');


if (isset($_POST['btnsubmit'])){
    

        if(!empty($_POST['textarea1'])){
            $value = $_POST['textarea1'];
          
            $sql = "INSERT INTO textsdkut(textpost) VALUES ('$value')";
            $query = mysqli_query($con,$sql);

            if($query) {
               echo "<script>alert('Posting Success')</script>";
               echo "<script>location.replace('adminpage.php');</script>";
           
           }
           else{
                echo "<script>alert('Posting Failed')</script>";
                echo "<script>location.replace('adminpage.php');</script>";
            }
        }else{
            echo "<script>alert('Type something to SecPost')</script>";
            echo "<script>location.replace('adminpage.php');</script>";
        }
}

?>
