<?php
include('session.php');
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'mailingservice';
	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
	$user_check=$_SESSION['userentered'];
	$qry="SELECT * FROM userdetails where Username='$user_check'";
	 $result=mysqli_query($conn,$qry);
	 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	 $count = mysqli_num_rows($result);
	 if($count == 1)
	 {
	 	if ( !empty( $row['Profilepic'] ) )
	 	{
	 		 $_SESSION['profilephoto'] = $row['Profilepic'];
	 	}
	 	else
	 	{
	 		$_SESSION['profilephoto']=NULL;
	 	}
	 	
	 }
?>
<!DOCTYPE HTML>
<head>
<title>Welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/login.js"></script>
 <!----Calender -------->
  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
  <script src="js/underscore-min.js"></script>
  <script src= "js/moment-2.2.1.js"></script>
  <script src="js/clndr.js"></script>
  <script src="js/site.js"></script>
  <!----End Calender -------->
</head>
<body>			       
	    <div class="wrap">	 
	      <div class="header">
	      	  <div class="header_top">
					  <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
							<ul class="nav">
								<li><a href="settings.html"><i><img src="images/settings.png" alt="" /></i>Settings</a></li>
								<li class="active"><a href="#"><i><img src="images/user.png" alt="" /></i>Account</a></li>
								<li><a href="#"><i><img src="images/contact_us.png" alt="" /></i>Contact Us </a></li>
								<li><a href="#"><i><img src="images/starred.png" alt="" /></i>Starred</a></li>
							<div class="clear"></div>
						    </ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				        </div>
					  <div class="profile_details">
				    		   <div id="loginContainer">
				                  <a id="loginButton" class=""><span>Me</span></a>   
				                    <div id="loginBox">                
				                      <form id="loginForm">
				                        <fieldset id="body">
				                            <div class="user-info">
							        			<h4>Hello, <?php echo $login_session; ?></h4>
							        			<ul>
							        				<li class="logout"><a href="logout.php"> Logout</a></li>
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                </div>
				            </div>
				             <div class="profile_img">
				             <?php 
		         		if(isset($_SESSION['profilephoto']))
		         		{
		         			//echo <img width = "150" height="150" src="' . $_SESSION['imgpath'] . '" alt="" />	</a>
		         			//echo '<img src="' . $_SESSION['imgpath'] . '" style="width:40;height:40px">';
		         			echo '<img  style="width:40;height:40px" src="data:image;base64,'.$_SESSION['profilephoto'].' "> ';
		         		}
		         		else
		         		{
		         			//<a href=""><img width = "150" height="150" src="images/profile.png" alt="" />	</a>
		         			echo '<img src="images/profile.png" style="width:40;height:40px">';
		         		}
		         		?>
				             </div>		
				             <div class="clear"></div>		  	
					    </div>	
		 		      <div class="clear"></div>				 
				   </div>
			</div>	  					     
	</div>

	  <div class="main">  
	    <div class="wrap">  		 
	       <div class="column_left">	          
	    		 <div class="inbox">
	    		 	 <h3>INBOX</h3>
	    		 	    <a href="#">
	    		 	   	   <div class="inbox_icon"></div>
				        </a>
	    		 </div> 
	    		 <div class="compose">
		               <h3>Compose</h3>
		               <a href="#">
		               	 <div class="compose_icon"></div>
		               </a>

		          </div> 
	  		</div> 
	  		
            <div class="column_middle">
              <div class="column_middle_grid1">
		         <div class="profile_picture">
		         	<form method="post" action="propic.php" enctype="multipart/form-data">
		         		<?php 
		         		if(isset($_SESSION['profilephoto']))
		         		{
		         			//echo <img width = "150" height="150" src="' . $_SESSION['imgpath'] . '" alt="" />	</a>
		         			//echo '<img src="' . $_SESSION['imgpath'] . '" style="border-radius: 50%">';
		         			echo '<img  style="border-radius: 60%" src="data:image;base64,'.$_SESSION['profilephoto'].' "> ';
		         		}
		         		else
		         		{
		         			//<a href=""><img width = "150" height="150" src="images/profile.png" alt="" />	</a>
		         			echo '<img src="images/profile.png" style="width:150;height:150px">';
		         		}
		         		?>		         
		            <div class="profile_picture_name">
		            	<h2><?php echo $login_session; ?></h2>
		            	<input type="file" name="image" accept="image/*">
		            	<input id="UploadProfile" type="submit" value="upload" name="submit"/>
		            </form>
		            </div>
		             
		          </div>

		       </div>	 


		       	 <div class="sent">
	    		 	 <h3>SENT</h3>
	    		 	    <a href="#">
	    		 	   	   <div class="sent_icon"></div>
				        </a>
	    		 </div>           
		       
    	    </div>
    	    
            <div class="column_right">
				 <div class="column_right_grid sign-in">
				 	<div class="trash">
                        <a href="#">
	    		 	   	   <div class="trash_icon"></div>
				        </a>

          		 	  <div class="trash_text">
					   	 <p>TRASH</p>
				      </div>
				   </div>
				   

				   <div class="column_right_grid calender">
                      <div class="cal1"> </div>
				   </div>
             </div>
    	<div class="clear"></div>
 	 </div>
   </div>
  
</body>
</html>

