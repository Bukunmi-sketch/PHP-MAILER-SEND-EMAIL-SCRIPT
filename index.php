<?php 



?>

<!DOCTYPE html>
         <html lang="en">
         <head>
         <title>send email to recepient</title>
         <?php include 'metatags.php' ; ?>

       <link rel="stylesheet" type="text/css" href="index.css">     
  </head>

       <body>

                <div class="sub-container" >
                	<div class="p">Type your message below and send it instantly</div>
                	<div class="visitor-details">
                     	<form action="#">
                				<div class="error"></div><br>
                	        <div class="name-details">
                	           <label>Your Full Name:</label>
                	           <input type="text" name=name" fullname" placeholder="" pattern="[A-Z\sa-z]{3,25}"  id ="" autofocus required>
                	        </div>
                	        	 
                	        <div class="email-details">
                	             <label>Your E-mail Address:</label>
                	             <input type="email" id="email" name="email" placeholder="" required autocomplete="off">
                	        </div>
                	        	 
                             <div class="email-details">
                                 <label>subject</label>
                                 <input type="text" id="subject" name="subject" placeholder="" required autocomplete="off">
                             </div>
        
                	        <div class="textarea-details">
                	            <label>Your Message:</label>
                	            <textarea name="messagebody" id="messagebody"></textarea>
                	        </div>
                		 
                	        <input type="submit" class="submit" name="" value="Send Message">
                		 
                    	</form>  
                		 
                	</div>
                		 
                		 
                </div>
				<script src="send.js"></script>
	   </body>
		 </html>
