
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
		<h3>Videos</h3>
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
		$sql="SELECT * FROM videosdkut ORDER BY ID DESC";
		$result= mysqli_query($con,$sql);
		$queryResults= mysqli_num_rows($result);
		
		
		if($queryResults >0) {
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "
				<div style='height:auto;margin-top:10%;width:85%;margin-left:10%;background-color: grey;'>
				<div  style='height: auto;width: 100%;color: white;background-color: grey; border-radius: 10px;text-align: left; margin-left:0%; padding:10px; '>".$row['caption']."</div>
		
				<video style='width: 100%; height: auto; margin-top:0%;' controls >
				<source src='videos/".$row['name']."' type= 'video/mp4'>
				
			
				
				</div>
			
			
			
				";

	
			}
		}
		else {
		echo "<script>alert('No record yet.')</script>";
			}
		
		?>

	
		</div>
	
	

	

</div>



</div>





</body>
</html>


<?php
include('db.php');



if (isset($_POST['upload'])) {
	if(!empty($_FILES['file']['name'])){
		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$caption = $_POST['textarea3'];
		$category = $_POST['category'];
		
		
	
		
	
	
		move_uploaded_file($tmp,"videos/".$name);
	
		
		$sql = "INSERT INTO videosdkut(name, caption) VALUES ('$name','$caption')";
		$res = mysqli_query($con,$sql);
		
	
		if($res ==1){
            echo "<script>alert('upload success')</script>";
            echo "<script>location.replace('adminpage.php');</script>";
		}
	
	}else{
		echo "<script>alert('Choose a video file to SecPost')</script>";
		echo "<script>location.replace('adminpage.php');</script>";
	}
	
}

?>
