
<!DOCTYPE html>
 <html>
<html>
<head>
	<title>SecSite stories</title>
	<script src="secsite.js"></script>

	

	 
	

<!--bootstrap links-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



</head>

<body>



	<!--bootstrap links-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="noticeboard.css">
 
<div class="container">


		

<div id="samp">
		<h1 id="mainhearder">Dkut Online Noticeboard</h1></h1>
		<h3>Admin Page</h3>
		<div  class="sidenav">
		<a href="textposts.php">Stories</a>
		<a  href="pictureposts.php">Pictures</a>
		<a  href="videoposts.php">Videos</a>
		<a  href="audioposts.php">Audios</a>
		
 </div>
	
	



<div id="secvideos" style="width: 1000px; margin-left: 50px;">

<div class="divpost">
<h2>Post text here</h2>
<form id="textform" action="textposts.php" method="POST">
			
               	<p><br>
		
        		     <textarea class="form-control" name="textarea1" id="textarea1" cols="70" rows= "1" placeholder="Share to the students" style="width:70%;border-radius: 20px; margin-left: 10%;"></textarea>
                     <button name="btnsubmit" type="submit" class="btn btn-primary" id="secpostbtn1">Post</button></p><br>
        
        </form>
</div>


<div class="divpost">
<h2>Post pictures here</h2>
<form method ="POST" action="pictureposts.php"  enctype="multipart/form-data">

<p style="display: flex; text-align: left; margin-bottom: 0%;">	
<label class="form-label" for="secpicsupload" id="labels"style="width: auto; margin-left: 10%;"> Attach pictures here</label><br>
    
                
                    <input id="secpicsupload" type="file" name="image" accept="image/*" style="width: auto;" style="background-color: red;border-radius: 20px;"><br>
        </p>	
            
     
        
                <textarea class="form-control" name="textarea2" id="textarea2" cols="50" rows= "1" placeholder="Caption your pictures" style="width:90%;border-radius: 20px; margin-left: 5%;"></textarea>
      
                <button  type="submit" name="upload"  class="btn btn-primary"id="secpostbtn2" onclick="uploadFile()">Post</button>
      </form>      
</div>

<div class="divpost">
<p style="display: flex; text-align: left; margin-bottom: 0%;">	
<h2>Upload video here</h2>

<form method ="POST" action="videoposts.php"  enctype="multipart/form-data" id="uploadForm3">
		                           
              		
                                   <p style="display: flex; text-align: centre; margin-bottom: 0%;">
                                   
                                   <label  class="form-label" for="secvidsupload"  id="labels"> Attach videos here</label>
                                           <input type="file" name="file" style="width: auto;" id="inpFile" accept="video/*">	
                                   </p>
                       
                   
                                           <textarea type="text" class="form-control"  name="textarea3" id="textarea3" cols="50" rows= "1" placeholder="Caption your video" style="width:90%;border-radius: 20px; margin-left: 5%;"></textarea><br>
   
   
                                           <button  type="submit" name="upload"  class="btn btn-primary"id="secpostbtn2" onclick="uploadFile()">Post</button>
    </form>
    </p>                                   
</div>


<div class="divpost">
                <h2>Upload audio here</h2>
                                        
                <form method ="POST" action="audioposts.php"  enctype="multipart/form-data" id="uploadForm3">		
                                        <p style="display: flex; text-align: centre; margin-bottom: 0%;">
                                        
                                        <label  class="form-label" for="secvidsupload"  id="labels"> Attach audio here</label>
                                <input type="file" name="file" style="width: auto;" id="inpFile" accept="audio/*">	
                                        </p>
                                <textarea type="text" class="form-control"  name="textarea3" id="textarea3" cols="50" rows= "1" placeholder="Caption your audio" style="width:90%;border-radius: 20px; margin-left: 5%;"></textarea><br>
                                        
                                <button  type="submit" name="upload"  class="btn btn-primary"id="secpostbtn2" onclick="uploadFile()">Post</button>
                        </form>	
 </div>

</div>
</div>

</body>
</html>

