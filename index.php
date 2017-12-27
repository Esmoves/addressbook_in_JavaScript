<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0;  user-scalable=0;" name="viewport">
	<title>AddressBook</title>
	<link rel="stylesheet" href="./include/stylesheetAdressenboek.cs">
	<script src="./include/scriptAdressen.js"></script>
</head>
<body>
	<div class="container">
		<div class="sidemenu">
			<a href="#">
			  <div id="btn1" class="button">
			    <h1 class="submenu">settings</h1>
			  </div>
			</a>

			<a href="#">
			  <div id="btn2" class="button">
			    <h1 class="submenu">tutorials</h1>
			  </div>
			</a>

			<a href="#">
			  <div id="btn3" class="button">
			    <h1 class="submenu">about</h1>
			  </div>
			</a>
		</div>
	
		<div class="title">
			<img src="./images/happymail.jpg" alt="Happy mail" />
			<h1>Keep in Touch!</h1>
			<p class="subtitle"><em>Bring smiles with mail.<br />
			Keep track of your contacts <br />using the KeepInTouch-App by Tijhoff.inc</em></p>
		</div>

		<div class="mainmenu">
			<ul>
				
				<li>	
					<div class="mainmenuItem"><button id="AllContacts">Your contacts</button></div>
				</li>
				<li>
					<div class="mainmenuItem"><button id="sendMail">Your Mail</button></div>
				</li>
				<li class="quickadd">
					<div class="mainmenuItem"><button id="QuickAdd">+ Add</button></div>
				</li>
			</ul>		
		</div>	
		<div class="quickaddForm">
			<label for="fullname">Name</label><input type="text" id="fullname" class="formFields">
			<label for="phone">Phone</label><input type="text" id="phone" class="formFields">
			<label for="address">Address</label><textarea name="address" id="address" cols="30" rows="10" class="formFields"></textarea>
			<label for="city">City</label><input type="text" id="city" class="formFields">
			<label for="email">E-Mail</label><input type="text" id="email" class="formFields">
			<br><br>
			<button id="Add">Add Now</button><button id="Cancel">Cancel</button>
		</div>
		<div class="addbook">
			<!-- <div class="entry">
				<div class="name"><p>Sachin Bhatnagar</p></div>
				<div class="email"><p>sachin@frameboxx.in</p></div>
				<div class="phone"><p>9316523541</p></div>
				<div class="address"><p>House No. 8, Sector 10 - A</p></div>
				<div class="city"><p>Chandigarh</p></div>
				<div class="del"><a href="#">Delete</a></div>
			</div> -->
			
		</div>	
	</div>
</body>
</html>