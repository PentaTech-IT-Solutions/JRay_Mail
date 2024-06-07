<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET IN TOUCH</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<style type="text/css">
		#contact{
			width: 100%;
			height: 100%;
			padding: 80px;
			background: ;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			padding: 40px;
			background: ;
		}
		.contact{
			width: 100%;
			display: flex;
			justify-content: space-around;		
		}
/* */
		.contact-form{
			flex: 1;
			display: flex;
			flex-direction: column;
			gap: 25px;
		}
		.contact-form form{
			display: flex;
			flex-direction: column;
			gap: 15px;
		}
		.contact-form form input{
			height: 40px; width: 50%;
			padding: 6px 10px;
			border: 1px solid black;
			outline: none;
			font-size: 18px;  
		}
		.contact-form textarea{
			font-size: 18px;
			height: 80px; width: 50%;
			border: 1px solid black;
			outline: none;
			padding: 10px;
		}
		.contact-form form button{
			width: 25%;
			padding: 10px 15px;
			font-size: 20px;
			background: black;
			color: white;
			border: none;
			outline: none;
			cursor: pointer;
		}
		@media screen and (max-width: 700px) and (min-width: 390px) {
			#contact {
				padding: 60px;
			}
		}
		@media screen and (max-width: 920px) and (min-width: 681px) {
			#contact{
				padding: 30px;
			}
		}
		@media screen and (max-width: 680px) {
			#contact{
				padding: 40px 30px;
			}
			.contact{
				flex-direction: column;
				gap: 60px;
			}
			.contact-text{
				gap: 30px;
			}
 
		}
	</style>
</head>
<body>
 
    <section id="contact">
       <div class="contact">

    	<div class="contact-form">
    		<h1>Get In Touch</h1>
    		<form action="send2.php" method="post">
	    		<input type="text" name="name" placeholder="Enter your name" required>
	    		<input type="email" name="email" placeholder="Enter a valid email" required>
	    		<input type="text" name="subject" placeholder="Enter a subject" required>
	    		<textarea name="message" placeholder="Enter your message" required></textarea>
	    		<button type="submit">Send</button>    			
    		</form>

    	</div>       	
       </div>  
    </section>


</body>
</html>