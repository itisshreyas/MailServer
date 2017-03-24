<!DOCTYPE HTML>
<head>
<title>Welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
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
												<h4>Hello, <?php echo $_SESSION["userentered"];?> </h4>
							        			<ul>
							        				<li class="logout"><a href="#"> Logout</a></li>
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                </div>
				            </div>
				             <div class="profile_img">	
				             	<a href="#"><img width="40" height="40" src="images/profile.png" alt="" />	</a>
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
	    		 	   	   <div class="inbox_icon">
	    		 	   	        <img width="200" height="200" src="images/inbox.png">
				           </div>
				        </a>
	    		 </div> 
	    		 <div class="compose">
		               <h3>Compose</h3>
		               <a href="#">
		               	 <div class="compose_icon">
		               	 	 <img src="images/compose.png">
		               	 </div>
		               </a>

		          </div> 
	  		</div> 
	  		
            <div class="column_middle">
              <div class="column_middle_grid1">
		         <div class="profile_picture">
		        	<a href=""><img width = "150" height="150" src="images/profile.png" alt="" />	</a>		         
		            <div class="profile_picture_name">
		            	<h2>USER NAME</h2>
		            	<input type="file" name="file" >
		            </div>
		             
		          </div>

		       </div>	 


		       	 <div class="sent">
	    		 	 <h3>SENT</h3>
	    		 	    <a href="#">
	    		 	   	   <div class="sent_icon">
	    		 	   	        <img src="images/sent.png">
				           </div>
				        </a>
	    		 </div>           
		       
    	    </div>
    	    
            <div class="column_right">
				 <div class="column_right_grid sign-in">
				 	<div class="trash">
                        <a href="#">
	    		 	   	   <div class="trash_icon">
	    		 	   	        <img src="images/trash.png">
				           </div>
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

